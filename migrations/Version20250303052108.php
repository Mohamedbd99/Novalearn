<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250303052108 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE blog (id INT AUTO_INCREMENT NOT NULL, author_id BIGINT DEFAULT NULL, description LONGTEXT NOT NULL, content LONGTEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, category VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, title VARCHAR(255) NOT NULL, INDEX IDX_C0155143F675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE course (id INT AUTO_INCREMENT NOT NULL, author_id BIGINT NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, contenu LONGTEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, nbr_like INT NOT NULL, video VARCHAR(255) DEFAULT NULL, nombre_de_telechargements INT NOT NULL, INDEX IDX_169E6FB9F675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE exercice (id INT AUTO_INCREMENT NOT NULL, course_id INT NOT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, created_at DATETIME DEFAULT NULL, INDEX IDX_E418C74D591CC992 (course_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, nom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, message VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_CE60640412469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponse (id INT AUTO_INCREMENT NOT NULL, exercice_id_id INT DEFAULT NULL, eleve_id_id BIGINT DEFAULT NULL, contenu LONGTEXT NOT NULL, INDEX IDX_5FB6DEC726C958BE (exercice_id_id), INDEX IDX_5FB6DEC7602483BE (eleve_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE blog ADD CONSTRAINT FK_C0155143F675F31B FOREIGN KEY (author_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE course ADD CONSTRAINT FK_169E6FB9F675F31B FOREIGN KEY (author_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE exercice ADD CONSTRAINT FK_E418C74D591CC992 FOREIGN KEY (course_id) REFERENCES course (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640412469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC726C958BE FOREIGN KEY (exercice_id_id) REFERENCES exercice (id)');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC7602483BE FOREIGN KEY (eleve_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE qestionQuiz RENAME INDEX idx_b6f7494e853cd175 TO IDX_663B64B4853CD175');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog DROP FOREIGN KEY FK_C0155143F675F31B');
        $this->addSql('ALTER TABLE course DROP FOREIGN KEY FK_169E6FB9F675F31B');
        $this->addSql('ALTER TABLE exercice DROP FOREIGN KEY FK_E418C74D591CC992');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640412469DE2');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC726C958BE');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC7602483BE');
        $this->addSql('DROP TABLE blog');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE course');
        $this->addSql('DROP TABLE exercice');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('ALTER TABLE qestionQuiz RENAME INDEX idx_663b64b4853cd175 TO IDX_B6F7494E853CD175');
    }
}
