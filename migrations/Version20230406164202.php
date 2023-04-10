<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230406164202 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sponsor DROP FOREIGN KEY FK_818CC9D4DCDFA082');
        $this->addSql('DROP INDEX IDX_818CC9D4DCDFA082 ON sponsor');
        $this->addSql('ALTER TABLE sponsor DROP evennement_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `sponsor` ADD evennement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `sponsor` ADD CONSTRAINT FK_818CC9D4DCDFA082 FOREIGN KEY (evennement_id) REFERENCES evennement (id)');
        $this->addSql('CREATE INDEX IDX_818CC9D4DCDFA082 ON `sponsor` (evennement_id)');
    }
}
