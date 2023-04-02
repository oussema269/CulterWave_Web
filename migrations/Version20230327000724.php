<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230327000724 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY commande_ibfk_1');
        $this->addSql('ALTER TABLE evennement DROP FOREIGN KEY evennement_ibfk_1');
        $this->addSql('ALTER TABLE evennement DROP FOREIGN KEY fk_sponsor');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY formation_ibfk_1');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY panier_ibfk_1');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY panier_ibfk_2');
        $this->addSql('ALTER TABLE participationformation DROP FOREIGN KEY participationformation_ibfk_2');
        $this->addSql('ALTER TABLE participationformation DROP FOREIGN KEY participationformation_ibfk_1');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY produit_ibfk_1');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY produit_ibfk_2');
        $this->addSql('ALTER TABLE sponsor DROP FOREIGN KEY sponsor_ibfk_1');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE code');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE evennement');
        $this->addSql('DROP TABLE formation');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE participationformation');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE sponsor');
        $this->addSql('DROP TABLE user');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id_cat INT AUTO_INCREMENT NOT NULL, categorie VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id_cat)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE code (codeEmail INT NOT NULL, email VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(codeEmail)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE commande (idc INT AUTO_INCREMENT NOT NULL, id_client INT NOT NULL, date DATE DEFAULT NULL, etat INT DEFAULT NULL, totale DOUBLE PRECISION DEFAULT NULL, INDEX id_client (id_client), PRIMARY KEY(idc)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE evennement (id INT AUTO_INCREMENT NOT NULL, sponsor_id INT DEFAULT NULL, id-owner INT DEFAULT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, description VARCHAR(500) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, lieu VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, prix INT NOT NULL, date DATE NOT NULL, nb_participants INT NOT NULL, type_evenement VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX fk_sponsor (sponsor_id), INDEX id-owner (id-owner), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE formation (idformation INT AUTO_INCREMENT NOT NULL, titre TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, description TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ownerID INT NOT NULL, type TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, pays TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, debut DATE NOT NULL, fin DATE NOT NULL, confirmation VARCHAR(5) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX ownerID (ownerID), PRIMARY KEY(idformation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE panier (idpainer INT AUTO_INCREMENT NOT NULL, id_client INT NOT NULL, id_product INT NOT NULL, quantite INT NOT NULL, totale DOUBLE PRECISION DEFAULT NULL, INDEX id_client (id_client), INDEX id_product (id_product), PRIMARY KEY(idpainer)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE participationformation (idParticipationFormation INT AUTO_INCREMENT NOT NULL, idFormation INT NOT NULL, idUser INT NOT NULL, confirmation VARCHAR(5) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX idFormation (idFormation), INDEX idUser (idUser), PRIMARY KEY(idParticipationFormation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, id_cat INT NOT NULL, id-owner INT NOT NULL, lib VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, stock INT NOT NULL, prix DOUBLE PRECISION NOT NULL, INDEX fk_categorie (id_cat), INDEX id-owner (id-owner), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reclamation (id_reclamation INT AUTO_INCREMENT NOT NULL, id_reclamateur INT NOT NULL, id_cible_reclamation INT NOT NULL, type_reclamation VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, contenu VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, datepro VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id_reclamation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reponse (id_reponse INT AUTO_INCREMENT NOT NULL, id_reclamation INT NOT NULL, repo VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id_reponse)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE sponsor (id INT AUTO_INCREMENT NOT NULL, id-owner INT DEFAULT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, INDEX id-owner (id-owner), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user (Id INT AUTO_INCREMENT NOT NULL, Nom VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, Prenom VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, Email VARCHAR(30) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, password VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Type VARCHAR(10) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, isActive INT DEFAULT 1 NOT NULL, PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT commande_ibfk_1 FOREIGN KEY (id_client) REFERENCES user (Id)');
        $this->addSql('ALTER TABLE evennement ADD CONSTRAINT evennement_ibfk_1 FOREIGN KEY (id-owner) REFERENCES user (Id)');
        $this->addSql('ALTER TABLE evennement ADD CONSTRAINT fk_sponsor FOREIGN KEY (sponsor_id) REFERENCES sponsor (id)');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT formation_ibfk_1 FOREIGN KEY (ownerID) REFERENCES user (Id)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT panier_ibfk_1 FOREIGN KEY (id_client) REFERENCES user (Id)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT panier_ibfk_2 FOREIGN KEY (id_product) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE participationformation ADD CONSTRAINT participationformation_ibfk_2 FOREIGN KEY (idUser) REFERENCES user (Id)');
        $this->addSql('ALTER TABLE participationformation ADD CONSTRAINT participationformation_ibfk_1 FOREIGN KEY (idFormation) REFERENCES formation (idformation)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT produit_ibfk_1 FOREIGN KEY (id_cat) REFERENCES categorie (id_cat)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT produit_ibfk_2 FOREIGN KEY (id-owner) REFERENCES user (Id)');
        $this->addSql('ALTER TABLE sponsor ADD CONSTRAINT sponsor_ibfk_1 FOREIGN KEY (id-owner) REFERENCES user (Id)');
    }
}
