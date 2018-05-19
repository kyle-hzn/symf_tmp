<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180519153935 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE options (id INT AUTO_INCREMENT NOT NULL, owner VARCHAR(150) NOT NULL, owner_image VARCHAR(255) NOT NULL, owner_image_file VARCHAR(255) NOT NULL, tobogan TINYINT(1) NOT NULL, towels TINYINT(1) NOT NULL, barbecue TINYINT(1) NOT NULL, kids_games TINYINT(1) NOT NULL, shower TINYINT(1) NOT NULL, chair TINYINT(1) NOT NULL, fridge TINYINT(1) NOT NULL, heat TINYINT(1) NOT NULL, ping_pong TINYINT(1) NOT NULL, restauration TINYINT(1) NOT NULL, pets TINYINT(1) NOT NULL, smoke TINYINT(1) NOT NULL, calm TINYINT(1) NOT NULL, kids_free TINYINT(1) NOT NULL, kids TINYINT(1) NOT NULL, owner_presence TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE options');
    }
}
