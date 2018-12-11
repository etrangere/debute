<?php declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181211162608 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE client ADD adult INT NOT NULL, ADD child INT NOT NULL, ADD baby INT NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C74404551A2EF281 ON client (adult)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C744045522B35429 ON client (child)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C7440455876C813E ON client (baby)');
        $this->addSql('ALTER TABLE reservation CHANGE date_in date_in DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_C74404551A2EF281 ON client');
        $this->addSql('DROP INDEX UNIQ_C744045522B35429 ON client');
        $this->addSql('DROP INDEX UNIQ_C7440455876C813E ON client');
        $this->addSql('ALTER TABLE client DROP adult, DROP child, DROP baby');
        $this->addSql('ALTER TABLE reservation CHANGE date_in date_in DATETIME NOT NULL');
    }
}
