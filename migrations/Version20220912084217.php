<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220912084217 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE options ADD name VARCHAR(255) NOT NULL, ADD statut TINYINT(1) DEFAULT NULL, DROP gestabon, DROP gestmat, DROP gestsalarie, DROP geststocks');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE options ADD gestmat TINYINT(1) DEFAULT NULL, ADD gestsalarie TINYINT(1) DEFAULT NULL, ADD geststocks TINYINT(1) DEFAULT NULL, DROP name, CHANGE statut gestabon TINYINT(1) DEFAULT NULL');
    }
}
