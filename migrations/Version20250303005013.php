<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250303005013 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE question (question_id VARCHAR(255) NOT NULL, quiz_id VARCHAR(255) NOT NULL, question VARCHAR(255) NOT NULL, correction VARCHAR(255) NOT NULL, a VARCHAR(255) NOT NULL, b VARCHAR(255) NOT NULL, c VARCHAR(255) NOT NULL, audio VARCHAR(255) DEFAULT NULL, INDEX IDX_B6F7494E853CD175 (quiz_id), PRIMARY KEY(question_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quiz (quiz_id VARCHAR(255) NOT NULL, user_id BIGINT DEFAULT NULL, difficulty VARCHAR(255) NOT NULL, matiere VARCHAR(255) NOT NULL, INDEX IDX_A412FA92A76ED395 (user_id), PRIMARY KEY(quiz_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quiz_submission (id INT AUTO_INCREMENT NOT NULL, quiz_id VARCHAR(255) NOT NULL, responses JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', score INT NOT NULL, submitted_at DATETIME NOT NULL, INDEX IDX_926A7DCF853CD175 (quiz_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E853CD175 FOREIGN KEY (quiz_id) REFERENCES quiz (quiz_id)');
        $this->addSql('ALTER TABLE quiz ADD CONSTRAINT FK_A412FA92A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE quiz_submission ADD CONSTRAINT FK_926A7DCF853CD175 FOREIGN KEY (quiz_id) REFERENCES quiz (quiz_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E853CD175');
        $this->addSql('ALTER TABLE quiz DROP FOREIGN KEY FK_A412FA92A76ED395');
        $this->addSql('ALTER TABLE quiz_submission DROP FOREIGN KEY FK_926A7DCF853CD175');
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP TABLE quiz');
        $this->addSql('DROP TABLE quiz_submission');
    }
}
