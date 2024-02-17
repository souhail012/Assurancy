<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240211140824 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE assurance (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, id_immobilier INT DEFAULT NULL, id_vehicule INT DEFAULT NULL, type VARCHAR(255) NOT NULL, date_d DATE NOT NULL, date_f DATE NOT NULL, prix DOUBLE PRECISION DEFAULT NULL, INDEX IDX_386829AE79F37AE5 (id_user_id), UNIQUE INDEX UNIQ_386829AEB1A7A405 (id_immobilier), UNIQUE INDEX UNIQ_386829AE79F41388 (id_vehicule), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, id_publication_id INT DEFAULT NULL, texte LONGTEXT NOT NULL, date DATE NOT NULL, UNIQUE INDEX UNIQ_67F068BC79F37AE5 (id_user_id), INDEX IDX_67F068BC5D4AAA1 (id_publication_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE constat (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, veha_permis INT NOT NULL, veha_venant VARCHAR(255) NOT NULL, veha_allant VARCHAR(255) NOT NULL, veha_datepermis DATE NOT NULL, vehb_assurance VARCHAR(255) NOT NULL, vehb_police VARCHAR(255) NOT NULL, vehb_agence VARCHAR(255) NOT NULL, vehb_attestation_vdd DATE NOT NULL, vehb_attestation_vdf DATE NOT NULL, vehb_c_nom VARCHAR(255) NOT NULL, vehb_c_prenom VARCHAR(255) NOT NULL, vehb_c_adresse VARCHAR(255) NOT NULL, vehb_c_permis INT NOT NULL, vehb_c_datepermis DATE NOT NULL, vehb_a_nom VARCHAR(255) NOT NULL, vehb_a_prenom VARCHAR(255) NOT NULL, vehb_a_adresse VARCHAR(255) NOT NULL, vehb_a_tel INT NOT NULL, vehb_marque VARCHAR(255) NOT NULL, vehb_type VARCHAR(255) NOT NULL, vehb_matricule VARCHAR(255) NOT NULL, vehb_venant VARCHAR(255) NOT NULL, vehb_allant VARCHAR(255) NOT NULL, veha_circomstances VARCHAR(255) NOT NULL, vehb_circomstances VARCHAR(255) NOT NULL, photo_accident LONGBLOB NOT NULL, photo_veha LONGBLOB NOT NULL, photo_vehb LONGBLOB NOT NULL, blesses TINYINT(1) NOT NULL, INDEX IDX_F96EDD9879F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE demande (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, id_agent_id INT DEFAULT NULL, localisation VARCHAR(255) NOT NULL, nbr_personnes INT NOT NULL, status VARCHAR(255) NOT NULL, INDEX IDX_2694D7A579F37AE5 (id_user_id), INDEX IDX_2694D7A564CF9D9E (id_agent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE devis (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, date DATE NOT NULL, total_ttc DOUBLE PRECISION NOT NULL, etat VARCHAR(255) NOT NULL, remarque LONGTEXT DEFAULT NULL, INDEX IDX_8B27C52B79F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE devis_item (id INT AUTO_INCREMENT NOT NULL, id_devis_id INT DEFAULT NULL, designation LONGTEXT DEFAULT NULL, quantite INT NOT NULL, prix_u DOUBLE PRECISION NOT NULL, total DOUBLE PRECISION NOT NULL, INDEX IDX_50C944C11105164F (id_devis_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evaluation (id INT AUTO_INCREMENT NOT NULL, id_expert_id INT DEFAULT NULL, id_vehicule INT DEFAULT NULL, date DATE NOT NULL, valeurneuf DOUBLE PRECISION NOT NULL, valeurvenal DOUBLE PRECISION NOT NULL, observation LONGTEXT DEFAULT NULL, UNIQUE INDEX UNIQ_1323A575456330C3 (id_expert_id), UNIQUE INDEX UNIQ_1323A57579F41388 (id_vehicule), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE immobilier (id_fiscal INT NOT NULL, id_user_id INT DEFAULT NULL, adresse VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, superficie INT NOT NULL, titre_prop LONGBLOB NOT NULL, status VARCHAR(255) NOT NULL, INDEX IDX_142D24D279F37AE5 (id_user_id), PRIMARY KEY(id_fiscal)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `like` (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, id_publication_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_AC6340B379F37AE5 (id_user_id), INDEX IDX_AC6340B35D4AAA1 (id_publication_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mechano (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, tel INT NOT NULL, specialite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE publication (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, date DATE NOT NULL, titre VARCHAR(255) NOT NULL, contenu LONGTEXT NOT NULL, INDEX IDX_AF3C677979F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rdv (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, heure TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, sujet LONGTEXT NOT NULL, contenu LONGTEXT NOT NULL, email VARCHAR(255) NOT NULL, tel INT NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, tel INT NOT NULL, date_n DATE NOT NULL, role VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicule (matricule INT NOT NULL, id_user_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, modele VARCHAR(255) NOT NULL, prix DOUBLE PRECISION DEFAULT NULL, carte_grise LONGBLOB NOT NULL, status VARCHAR(255) NOT NULL, INDEX IDX_292FFF1D79F37AE5 (id_user_id), PRIMARY KEY(matricule)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE assurance ADD CONSTRAINT FK_386829AE79F37AE5 FOREIGN KEY (id_user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE assurance ADD CONSTRAINT FK_386829AEB1A7A405 FOREIGN KEY (id_immobilier) REFERENCES immobilier (id_fiscal)');
        $this->addSql('ALTER TABLE assurance ADD CONSTRAINT FK_386829AE79F41388 FOREIGN KEY (id_vehicule) REFERENCES vehicule (matricule)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC79F37AE5 FOREIGN KEY (id_user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC5D4AAA1 FOREIGN KEY (id_publication_id) REFERENCES publication (id)');
        $this->addSql('ALTER TABLE constat ADD CONSTRAINT FK_F96EDD9879F37AE5 FOREIGN KEY (id_user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A579F37AE5 FOREIGN KEY (id_user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A564CF9D9E FOREIGN KEY (id_agent_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE devis ADD CONSTRAINT FK_8B27C52B79F37AE5 FOREIGN KEY (id_user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE devis_item ADD CONSTRAINT FK_50C944C11105164F FOREIGN KEY (id_devis_id) REFERENCES devis (id)');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A575456330C3 FOREIGN KEY (id_expert_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A57579F41388 FOREIGN KEY (id_vehicule) REFERENCES vehicule (matricule)');
        $this->addSql('ALTER TABLE immobilier ADD CONSTRAINT FK_142D24D279F37AE5 FOREIGN KEY (id_user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE `like` ADD CONSTRAINT FK_AC6340B379F37AE5 FOREIGN KEY (id_user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE `like` ADD CONSTRAINT FK_AC6340B35D4AAA1 FOREIGN KEY (id_publication_id) REFERENCES publication (id)');
        $this->addSql('ALTER TABLE publication ADD CONSTRAINT FK_AF3C677979F37AE5 FOREIGN KEY (id_user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D79F37AE5 FOREIGN KEY (id_user_id) REFERENCES utilisateur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE assurance DROP FOREIGN KEY FK_386829AE79F37AE5');
        $this->addSql('ALTER TABLE assurance DROP FOREIGN KEY FK_386829AEB1A7A405');
        $this->addSql('ALTER TABLE assurance DROP FOREIGN KEY FK_386829AE79F41388');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC79F37AE5');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC5D4AAA1');
        $this->addSql('ALTER TABLE constat DROP FOREIGN KEY FK_F96EDD9879F37AE5');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A579F37AE5');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A564CF9D9E');
        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52B79F37AE5');
        $this->addSql('ALTER TABLE devis_item DROP FOREIGN KEY FK_50C944C11105164F');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A575456330C3');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A57579F41388');
        $this->addSql('ALTER TABLE immobilier DROP FOREIGN KEY FK_142D24D279F37AE5');
        $this->addSql('ALTER TABLE `like` DROP FOREIGN KEY FK_AC6340B379F37AE5');
        $this->addSql('ALTER TABLE `like` DROP FOREIGN KEY FK_AC6340B35D4AAA1');
        $this->addSql('ALTER TABLE publication DROP FOREIGN KEY FK_AF3C677979F37AE5');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D79F37AE5');
        $this->addSql('DROP TABLE assurance');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE constat');
        $this->addSql('DROP TABLE demande');
        $this->addSql('DROP TABLE devis');
        $this->addSql('DROP TABLE devis_item');
        $this->addSql('DROP TABLE evaluation');
        $this->addSql('DROP TABLE immobilier');
        $this->addSql('DROP TABLE `like`');
        $this->addSql('DROP TABLE mechano');
        $this->addSql('DROP TABLE publication');
        $this->addSql('DROP TABLE rdv');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE vehicule');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
