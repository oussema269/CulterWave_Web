<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230406164543 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evennement ADD sponsor_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE evennement ADD CONSTRAINT FK_5C15C77412F7FB51 FOREIGN KEY (sponsor_id) REFERENCES `sponsor` (id)');
        $this->addSql('CREATE INDEX IDX_5C15C77412F7FB51 ON evennement (sponsor_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `evennement` DROP FOREIGN KEY FK_5C15C77412F7FB51');
        $this->addSql('DROP INDEX IDX_5C15C77412F7FB51 ON `evennement`');
        $this->addSql('ALTER TABLE `evennement` DROP sponsor_id');
    }
}
