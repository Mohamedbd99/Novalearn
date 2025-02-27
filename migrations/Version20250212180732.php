<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250212180732 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP difficulte, DROP niv_difficulte, CHANGE role role VARCHAR(255) NOT NULL, CHANGE password password VARCHAR(255) NOT NULL, CHANGE genre genre VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD difficulte VARCHAR(255) NOT NULL, ADD niv_difficulte VARCHAR(255) NOT NULL, CHANGE role role VARCHAR(255) DEFAULT NULL, CHANGE password password VARCHAR(255) DEFAULT NULL, CHANGE genre genre VARCHAR(100) DEFAULT NULL');
    }
}
