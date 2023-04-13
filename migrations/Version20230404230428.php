<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230404230428 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY fk_rec_id1');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY fk_rec_id2');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY reponse_ibfk_1');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP INDEX fk_rec_id1 ON reclamation');
        $this->addSql('DROP INDEX fk_rec_id2 ON reclamation');
        $this->addSql('ALTER TABLE reclamation ADD id INT AUTO_INCREMENT NOT NULL, CHANGE id_reclamation id_reclamation INT NOT NULL, CHANGE contenu contenu VARCHAR(50) NOT NULL, CHANGE datepro datepro VARCHAR(20) NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reponse (id_reponse INT AUTO_INCREMENT NOT NULL, id_reclamation INT NOT NULL, repo VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX id_reclamation (id_reclamation), PRIMARY KEY(id_reponse)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(15) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, type INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT reponse_ibfk_1 FOREIGN KEY (id_reclamation) REFERENCES reclamation (id_reclamation)');
        $this->addSql('ALTER TABLE reclamation MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP id, CHANGE id_reclamation id_reclamation INT AUTO_INCREMENT NOT NULL, CHANGE contenu contenu TEXT NOT NULL, CHANGE datepro datepro VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT fk_rec_id1 FOREIGN KEY (id_reclamateur) REFERENCES user (id) ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT fk_rec_id2 FOREIGN KEY (id_cible_reclamation) REFERENCES user (id) ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX fk_rec_id1 ON reclamation (id_reclamateur)');
        $this->addSql('CREATE INDEX fk_rec_id2 ON reclamation (id_cible_reclamation)');
        $this->addSql('ALTER TABLE reclamation ADD PRIMARY KEY (id_reclamation, id_reclamateur, id_cible_reclamation)');
    }
}
