<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241212150152 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bonbon (id INT AUTO_INCREMENT NOT NULL, marque_id INT NOT NULL, titre VARCHAR(50) NOT NULL, description LONGTEXT NOT NULL, poids_net INT NOT NULL, quantite_dans_le_sachet INT NOT NULL, sans_sucre TINYINT(1) NOT NULL, quantite_en_stock INT NOT NULL, prix DOUBLE PRECISION NOT NULL, INDEX IDX_37594B274827B9B2 (marque_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE marque (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bonbon ADD CONSTRAINT FK_37594B274827B9B2 FOREIGN KEY (marque_id) REFERENCES marque (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bonbon DROP FOREIGN KEY FK_37594B274827B9B2');
        $this->addSql('DROP TABLE bonbon');
        $this->addSql('DROP TABLE marque');
    }
}
