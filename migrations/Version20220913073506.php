<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220913073506 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE role_options (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE roles_users DROP FOREIGN KEY roles_users_ibfk_1');
        $this->addSql('ALTER TABLE roles_users DROP FOREIGN KEY roles_users_ibfk_2');
        $this->addSql('DROP TABLE roles_users');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE roles_users (user_id INT NOT NULL, role_id INT NOT NULL, INDEX role_id (role_id), INDEX IDX_3D80FB2CA76ED395 (user_id), PRIMARY KEY(user_id, role_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE roles_users ADD CONSTRAINT roles_users_ibfk_1 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE roles_users ADD CONSTRAINT roles_users_ibfk_2 FOREIGN KEY (role_id) REFERENCES role (id)');
        $this->addSql('DROP TABLE role_options');
    }
}
