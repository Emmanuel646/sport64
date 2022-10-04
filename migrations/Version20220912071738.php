<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220912071738 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE roles_users DROP FOREIGN KEY roles_users_ibfk_1');
        $this->addSql('ALTER TABLE roles_users DROP FOREIGN KEY roles_users_ibfk_2');
        $this->addSql('DROP TABLE options');
        $this->addSql('DROP TABLE roles');
        $this->addSql('DROP TABLE roles_users');
        $this->addSql('ALTER TABLE user DROP structure');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE options (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, statut TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE roles (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, UNIQUE INDEX name (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE roles_users (user_id INT NOT NULL, role_id INT NOT NULL, INDEX role_id (role_id), INDEX IDX_3D80FB2CA76ED395 (user_id), PRIMARY KEY(user_id, role_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE roles_users ADD CONSTRAINT roles_users_ibfk_1 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE roles_users ADD CONSTRAINT roles_users_ibfk_2 FOREIGN KEY (role_id) REFERENCES roles (id)');
        $this->addSql('ALTER TABLE user ADD structure VARCHAR(60) NOT NULL');
    }
}
