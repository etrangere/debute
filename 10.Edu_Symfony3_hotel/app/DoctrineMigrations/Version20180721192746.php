<?php declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180721192746 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE reservation CHANGE client_name client_name VARCHAR(255) NOT NULL, CHANGE room_name room_name INT NOT NULL, CHANGE date_in date_in DATETIME NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849553D279462 FOREIGN KEY (room_name) REFERENCES room (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849553D279462');
        $this->addSql('ALTER TABLE reservation CHANGE client_name client_name INT NOT NULL, CHANGE room_name room_name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE date_in date_in DATETIME NOT NULL');
    }
}
