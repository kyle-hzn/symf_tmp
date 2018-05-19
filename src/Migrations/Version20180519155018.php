<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180519155018 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE pool ADD tobogan_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pool ADD CONSTRAINT FK_AF91A98683986526 FOREIGN KEY (tobogan_id) REFERENCES options (id)');
        $this->addSql('CREATE INDEX IDX_AF91A98683986526 ON pool (tobogan_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE pool DROP FOREIGN KEY FK_AF91A98683986526');
        $this->addSql('DROP INDEX IDX_AF91A98683986526 ON pool');
        $this->addSql('ALTER TABLE pool DROP tobogan_id');
    }
}
