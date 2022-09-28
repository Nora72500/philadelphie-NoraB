<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220927174815 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact ADD subject VARCHAR(100) DEFAULT NULL, CHANGE full_name full_name VARCHAR(50) DEFAULT NULL, CHANGE email email VARCHAR(180) NOT NULL, CHANGE message message LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE user ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', ADD updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD rôle VARCHAR(255) NOT NULL, DROP user, DROP nom, DROP prenom, DROP speudo, DROP plain_password, CHANGE email email VARCHAR(180) NOT NULL, CHANGE full_name full_name VARCHAR(50) NOT NULL, CHANGE pseudo pseudo VARCHAR(50) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact DROP subject, CHANGE full_name full_name VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE message message VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('ALTER TABLE user ADD nom VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL, ADD speudo VARCHAR(255) NOT NULL, ADD plain_password VARCHAR(255) NOT NULL, DROP roles, DROP updated_at, CHANGE full_name full_name VARCHAR(255) NOT NULL, CHANGE pseudo pseudo VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE rôle user VARCHAR(255) NOT NULL');
    }
}
