CREATE DATABASE IF NOT EXISTS mvc_blog
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;
USE mvc_blog;

CREATE TABLE IF NOT EXISTS categories (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  description TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  update_at TIMESTAMP NULL DEFAULT NULL,
  INDEX idx_name (name)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS articles (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  cat_id INT UNSIGNED NOT NULL,
  body TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  update_at TIMESTAMP NULL DEFAULT NULL,
  INDEX idx_cat_id (cat_id),
  CONSTRAINT fk_articles_category
    FOREIGN KEY (cat_id) REFERENCES categories(id)
    ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;

-- داده‌ی نمونه (اختیاری)
INSERT INTO categories (name, description) VALUES
  ('عمومی', 'مثال دسته‌بندی');
INSERT INTO articles (title, cat_id, body) VALUES
  ('اولین مقاله', 1, 'متن نمونه برای تست نمایش');