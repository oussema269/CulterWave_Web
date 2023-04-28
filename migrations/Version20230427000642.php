<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230427000642 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rating ADD evennement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D8892622DCDFA082 FOREIGN KEY (evennement_id) REFERENCES `evennement` (id)');
        $this->addSql('CREATE INDEX IDX_D8892622DCDFA082 ON rating (evennement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `rating` DROP FOREIGN KEY FK_D8892622DCDFA082');
        $this->addSql('DROP INDEX IDX_D8892622DCDFA082 ON `rating`');
        $this->addSql('ALTER TABLE `rating` DROP evennement_id');
    }
}
