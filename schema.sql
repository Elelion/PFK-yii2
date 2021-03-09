CREATE DATABASE proffurkom CHARACTER SET 'utf8';

CREATE TABLE articles (
	id INT AUTO_INCREMENT PRIMARY KEY,
	date_create DATE,
	time_create TIME,
	title VARCHAR(32),
	mini_description TEXT,
	full_description TEXT,
	image_file VARCHAR(255)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;


CREATE TABLE events (
	id INT AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(32),
	mini_description TEXT,
	full_description TEXT,
	image_file VARCHAR(255),
	active tinyint(8) DEFAULT 0,
	redirect TEXT
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;


CREATE TABLE users_access (
	id INT AUTO_INCREMENT PRIMARY KEY,
	access VARCHAR(32) NOT NULL
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;


# CREATE TABLE catalog_0 (
# 	id INT AUTO_INCREMENT PRIMARY KEY,
# 	title VARCHAR(256),
# 	price VARCHAR(8),
# 	description TEXT,
# 	image VARCHAR(255),
# 	sale TINYINT(1) NOT NULL DEFAULT 0,
# 	sales_hits TINYINT(1) NOT NULL DEFAULT 0
# )
# ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- **

#ALTER TABLE users ADD FOREIGN KEY (access_id) REFERENCES users_access(id);


-- NOTE: new rules ------------------------------------------------------------

-- NOTE: service category in top menu, on the layout main page ----------------
CREATE TABLE service_category (
	id INT AUTO_INCREMENT PRIMARY KEY,
	active BOOLEAN NOT NULL DEFAULT false,
	title VARCHAR(47),
	description TEXT,
    img VARCHAR(255) NOT NULL DEFAULT 'none'
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- NOTE: slider on home page --------------------------------------------------
CREATE TABLE jumbotron (
    id INT AUTO_INCREMENT PRIMARY KEY,
    active BOOLEAN NOT NULL DEFAULT false,
    title VARCHAR(20),
    slogan VARCHAR(40),
    description VARCHAR(100),
    full_description TEXT,
    img VARCHAR(255) NOT NULL DEFAULT 'none'
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- NOTE: banner on home page --------------------------------------------------
CREATE TABLE banner (
     id INT AUTO_INCREMENT PRIMARY KEY,
     active BOOLEAN NOT NULL DEFAULT false,
     title VARCHAR(25),
     mini_description VARCHAR(50),
     full_description TEXT,
     img VARCHAR(255) NOT NULL DEFAULT 'none'
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- NOTE: catalog product ------------------------------------------------------
CREATE TABLE product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT(4),
    subcategory_id INT(4),
    article VARCHAR(12) DEFAULT 0,
    title VARCHAR(255),
    description TEXT,
    price decimal(8, 2) NOT NULL DEFAULT 0.00,
    price_old decimal(8, 2) NOT NULL DEFAULT 0.00,
    seo_description VARCHAR(255),
    seo_keywords VARCHAR(255),
    img VARCHAR(255) NOT NULL DEFAULT 'none',
    sale BOOLEAN NOT NULL DEFAULT false,
    hit BOOLEAN NOT NULL DEFAULT false
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- NOTE: orders ---------------------------------------------------------------
CREATE TABLE cart_order (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_product_id INT(8) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT NOW(),
    updated_at DATETIME NOT NULL DEFAULT NOW(),
    price float(8),
    status BOOLEAN NOT NULL DEFAULT false,
    name VARCHAR(128) NOT NULL,
    email VARCHAR(64) NOT NULL,
    phone VARCHAR(11) NOT NULL,
    note TEXT
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

CREATE TABLE cart_order_product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT(8),
    product_id INT(8),
    title VARCHAR(255),
    price decimal(6, 2),
    quantity VARCHAR(2)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
ALTER TABLE cart_order_product ADD FOREIGN KEY (product_id) REFERENCES product(id);

-- NOTE: alerts for user ------------------------------------------------------
CREATE TABLE alert_error (
	id INT AUTO_INCREMENT PRIMARY KEY,
	error_type VARCHAR(32),
	error_title VARCHAR(64),
	error_caption VARCHAR(128),
	error_description TEXT,
	timeout INT(2) NOT NULL DEFAULT 3
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- NOTE: users ----------------------------------------------------------------
CREATE TABLE users (
	id INT AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	created DATETIME NOT NULL DEFAULT NOW(),
	active BOOLEAN NOT NULL DEFAULT false,
	auth_key VARCHAR(256),
	token_value VARCHAR(256),
	token_lifetime DATE,
	role VARCHAR(8) NOT NULL DEFAULT 'user'
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- NOTE: subscribe for clients ------------------------------------------------
CREATE TABLE subscribe (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT NOW()
)

-- NOTE: Job Vacancy for clients ----------------------------------------------
CREATE TABLE vacancy (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    salary decimal(8, 2) NOT NULL DEFAULT 0.00,
    requirements TEXT NOT NULL,
    education VARCHAR(255) NOT NULL,
    experience VARCHAR(255) NOT NULL,
    responsibilities TEXT,
    conditions TEXT,
    active tinyint(8) DEFAULT 0
)