<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250212190117 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE eleve DROP FOREIGN KEY FK_ECA105F7BF396750');
        $this->addSql('ALTER TABLE parrents DROP FOREIGN KEY FK_EDA56BA2BF396750');
        $this->addSql('ALTER TABLE parrents DROP FOREIGN KEY FK_EDA56BA2E6B9712F');
        $this->addSql('DROP TABLE eleve');
        $this->addSql('DROP TABLE parrents');
        $this->addSql('ALTER TABLE user ADD niv_difficulte VARCHAR(255) NOT NULL, CHANGE num_tel num_tel INT NOT NULL, CHANGE discr difficulte VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE eleve (id INT NOT NULL, difficulte VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, niv_difficulte VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE parrents (id INT NOT NULL, fils_id INT NOT NULL, UNIQUE INDEX UNIQ_EDA56BA2E6B9712F (fils_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F7BF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parrents ADD CONSTRAINT FK_EDA56BA2BF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parrents ADD CONSTRAINT FK_EDA56BA2E6B9712F FOREIGN KEY (fils_id) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE user ADD discr VARCHAR(255) NOT NULL, DROP difficulte, DROP niv_difficulte, CHANGE num_tel num_tel VARCHAR(20) NOT NULL');
    }
}
