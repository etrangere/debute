<?php declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180721191807 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(20) DEFAULT NULL, name VARCHAR(100) NOT NULL, last_name VARCHAR(100) NOT NULL, address LONGTEXT NOT NULL, zip_code VARCHAR(10) NOT NULL, city VARCHAR(50) NOT NULL, state VARCHAR(20) NOT NULL, email VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_C7440455E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, client_name INT NOT NULL, room_name VARCHAR(255) NOT NULL, date_in DATETIME NOT NULL, date_out DATETIME NOT NULL, INDEX IDX_42C849558FBFBD64 (client_name), INDEX IDX_42C849553D279462 (room_name), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE room (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(20) NOT NULL, floor INT NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849558FBFBD64 FOREIGN KEY (client_name) REFERENCES client (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849553D279462 FOREIGN KEY (room_name) REFERENCES room (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849558FBFBD64');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849553D279462');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE room');
    }
}
