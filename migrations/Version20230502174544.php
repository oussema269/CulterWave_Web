<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230502174544 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande (idc INT AUTO_INCREMENT NOT NULL, id_client INT DEFAULT NULL, date DATE DEFAULT \'NULL\', etat INT DEFAULT NULL, totale DOUBLE PRECISION DEFAULT \'NULL\', nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, INDEX id_client (id_client), PRIMARY KEY(idc)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier (idpanier INT AUTO_INCREMENT NOT NULL, id_client INT DEFAULT NULL, id_product INT DEFAULT NULL, quantite INT NOT NULL, totale DOUBLE PRECISION DEFAULT \'NULL\', INDEX id_product (id_product), INDEX id_client (id_client), PRIMARY KEY(idpanier)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (Id INT AUTO_INCREMENT NOT NULL, Nom VARCHAR(20) DEFAULT \'NULL\', Prenom VARCHAR(20) DEFAULT \'NULL\', Email VARCHAR(30) DEFAULT \'NULL\', password VARCHAR(255) NOT NULL, Type VARCHAR(10) DEFAULT \'NULL\', isActive INT DEFAULT 1 NOT NULL, PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DE173B1B8 FOREIGN KEY (id_client) REFERENCES user (Id)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2E173B1B8 FOREIGN KEY (id_client) REFERENCES user (Id)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2DD7ADDD FOREIGN KEY (id_product) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE categorie CHANGE categorie categorie VARCHAR(255) DEFAULT \'NULL\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DE173B1B8');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2E173B1B8');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2DD7ADDD');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE categorie CHANGE categorie categorie VARCHAR(255) DEFAULT NULL');
    }
}
