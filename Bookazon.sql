CREATE TABLE Customer
(
  Email VARCHAR(25) NOT NULL,
  customerName VARCHAR(25) NULL,
  city VARCHAR(25) NULL,
  ccardnum NULL,
  accountPassword VARCHAR(16) NOT NULL,
  state CHAR(2) NULL,
  zip_code INT NULL,
  Address VARCHAR(25) NULL,
  PRIMARY KEY (Email)
);

CREATE TABLE Transaction
(
  transDate DATE NOT NULL,
  TID INT NOT NULL,
  quantity INT NOT NULL,
  Email VARCHAR(25) NOT NULL,
  PRIMARY KEY (TID),
  FOREIGN KEY (Email) REFERENCES Customer(Email)
);

CREATE TABLE book
(
  quantity INT NOT NULL,
  bookIBSM INT NOT NULL,
  bookTitle VARCHAR(50) NOT NULL,
  bookGenre VARCHAR(16) NOT NULL,
  bookPrice FLOAT NOT NULL,
  PRIMARY KEY (bookIBSM)
);

CREATE TABLE Shopping_cart
(
  cartid INT NOT NULL,
  ItemsInCart INT NOT NULL,
  Email VARCHAR(25) NOT NULL,
  PRIMARY KEY (cartid, Email),
  FOREIGN KEY (Email) REFERENCES Customer(Email)
);

CREATE TABLE involves
(
  cartid INT NOT NULL,
  Email VARCHAR(25) NOT NULL,
  bookIBSM INT NOT NULL,
  PRIMARY KEY (cartid, Email, bookIBSM),
  FOREIGN KEY (cartid, Email) REFERENCES Shopping_cart(cartid, Email),
  FOREIGN KEY (bookIBSM) REFERENCES book(bookIBSM)
);

CREATE TABLE involves
(
  bookIBSM INT NOT NULL,
  TID INT NOT NULL,
  PRIMARY KEY (bookIBSM, TID),
  FOREIGN KEY (bookIBSM) REFERENCES book(bookIBSM),
  FOREIGN KEY (TID) REFERENCES Transaction(TID)
);
Copy