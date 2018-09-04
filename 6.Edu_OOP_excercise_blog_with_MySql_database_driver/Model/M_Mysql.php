<?php
//
//
//
class M_Mysql
{



    private static $instance;
    //
    //
    //

    public static function Instance()
    {
        if (self::$instance == null)
            self::$instance = new M_Mysql();

        return self::$instance;
    }

    //
    //
    //
    public function Select($table)
    {

        $query = "SELECT * FROM $table";
       $result = mysqli_query(C_Base::getObject(),$query);

        if (!$result)
            die(mysqli_error(C_Base::getObject()));

        $n = mysqli_num_rows($result);
        $arr = array();

        for($i = 0; $i < $n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $arr[] = $row;
        }

        return $arr;
    }

    //
    //
    //
    public function Insert($table, $object)
    {

        $columns = array();
        $values = array();



        foreach ($object as $key => $value)
        {
            $key = mysqli_real_escape_string(C_Base::getObject(),$key . '');
            $columns[] = $key;

            if ($value === null)
            {
                $values[] = 'NULL';
            }
            else
            {
                $value = mysqli_real_escape_string(C_Base::getObject(),$value . '');
                $values[] = "'$value'";
            }
        }

        $columns_s = implode(',', $columns);
        $values_s = implode(',', $values);



        $query = "INSERT INTO $table ($columns_s) VALUES ($values_s)";
        $result = mysqli_query(C_Base::getObject(),$query);

        if (!$result)
            die(mysqli_error(C_Base::getObject()));

        return mysqli_insert_id(C_Base::getObject());

    }

    //
    //
    //
    public function Update($table,$object,$where)
    {

        $sets = array();


        foreach ($object as $key => $value)
        {
            $key = mysqli_real_escape_string(C_Base::getObject(),$key . '');

            if ($value === null)
            {
                $sets[] = "$key=NULL";
               // var_dump($sets);
            }
            else
            {
                $value = mysqli_real_escape_string(C_Base::getObject(),$value . '');
                $sets[] = "$key='$value'";
            }
        }

        $sets_s = implode(',', $sets);

        $query = "UPDATE $table SET $sets_s WHERE $where";

        $result = mysqli_query(C_Base::getObject(),$query);

        if (!$result)
            die(mysqli_error(C_Base::getObject()));

        return mysqli_affected_rows(C_Base::getObject());
    }

    //
    //
    //
    public function Delete($table,$where)
    {


     sprintf( mysqli_real_escape_string(C_Base::getObject(),$table), mysqli_real_escape_string(C_Base::getObject(),$where));


        $query = "DELETE FROM $table WHERE $where ";


        $result =  mysqli_query(C_Base::getObject(),$query);

        if (!$result)
            die(mysqli_error(C_Base::getObject()));

         return mysqli_affected_rows(C_Base::getObject());


    }
}
