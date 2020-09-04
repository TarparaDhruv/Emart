-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2015-10-21 18:23:44.198




-- tables
-- Table Buyer
CREATE TABLE Buyer (
    cid int  NOT NULL  AUTO_INCREMENT,
    fname varchar(25)  NOT NULL,
    lnamw varchar(25)  NOT NULL,
    cmail varchar(50)  NOT NULL,
    cname varchar(25)  NOT NULL,
    pass varchar(15)  NOT NULL,
    contact int  NOT NULL,
    contact2 int  NOT NULL,
    gender bool  NOT NULL,
    cimg varchar(1000)  NOT NULL,
    birthdate date  NOT NULL,
    blocked bool  NOT NULL,
    CONSTRAINT Buyer_pk PRIMARY KEY (cid)
);

-- Table address
CREATE TABLE address (
    cid int  NOT NULL  AUTO_INCREMENT,
    add1 varchar(255)  NOT NULL,
    add2 varchar(255)  NOT NULL,
    landmark varchar(100)  NOT NULL,
    area varchar(100)  NOT NULL,
    city varchar(100)  NOT NULL,
    state varchar(100)  NOT NULL,
    pincode int  NOT NULL,
    CONSTRAINT address_pk PRIMARY KEY (cid)
);

-- Table cart
CREATE TABLE cart (
    pid int  NOT NULL,
    quantity int  NOT NULL,
    sprice int  NOT NULL,
    total int  NOT NULL,
    CONSTRAINT cart_pk PRIMARY KEY (pid)
) ENGINE InnoDB
;

-- Table category
CREATE TABLE category (
    catid varchar(100)  NOT NULL,
    catname varchar(100)  NOT NULL,
    catdesc varchar(100)  NOT NULL,
    veg bool  NOT NULL,
    CONSTRAINT category_pk PRIMARY KEY (catid)
);

-- Table currentorder
CREATE TABLE currentorder (
    oid int  NOT NULL,
    cid int  NOT NULL,
    gtotal int  NOT NULL,
    status int  NOT NULL,
    CONSTRAINT currentorder_pk PRIMARY KEY (oid)
);

-- Table finishedorders
CREATE TABLE finishedorders (
    oid int  NOT NULL,
    cid int  NOT NULL,
    gtotal int  NOT NULL,
    status int  NOT NULL,
    bill varchar(1000)  NOT NULL,
    CONSTRAINT finishedorders_pk PRIMARY KEY (oid)
);

-- Table orderdetails
CREATE TABLE orderdetails (
    oid int  NOT NULL,
    pid int  NOT NULL,
    quantity int  NOT NULL,
    sprice int  NOT NULL,
    total int  NOT NULL,
    CONSTRAINT orderdetails_pk PRIMARY KEY (oid)
);

-- Table products
CREATE TABLE products (
    pid int  NOT NULL,
    catid varchar(100)  NOT NULL,
    pname varchar(100)  NOT NULL,
    weight int  NOT NULL,
    mrp int  NOT NULL,
    sprice int  NOT NULL,
    instock int  NOT NULL,
    pdescription varchar(500)  NOT NULL,
    pimg varchar(1000)  NOT NULL,
    visible bool  NOT NULL,
    CONSTRAINT products_pk PRIMARY KEY (pid)
);





-- foreign keys
-- Reference:  address_Buyer (table: address)


ALTER TABLE address ADD CONSTRAINT address_Buyer FOREIGN KEY address_Buyer (cid)
    REFERENCES Buyer (cid)
    MATCH FULL
    ON DELETE CASCADE
    ON UPDATE CASCADE;
-- Reference:  cart_products (table: cart)


ALTER TABLE cart ADD CONSTRAINT cart_products FOREIGN KEY cart_products (pid)
    REFERENCES products (pid)
    ON DELETE CASCADE
    ON UPDATE CASCADE;
-- Reference:  category_products (table: products)


ALTER TABLE products ADD CONSTRAINT category_products FOREIGN KEY category_products (catid)
    REFERENCES category (catid)
    ON DELETE CASCADE
    ON UPDATE CASCADE;
-- Reference:  currentorder_Buyer (table: currentorder)


ALTER TABLE currentorder ADD CONSTRAINT currentorder_Buyer FOREIGN KEY currentorder_Buyer (cid)
    REFERENCES Buyer (cid)
    ON DELETE CASCADE
    ON UPDATE CASCADE;
-- Reference:  finishedorders_Buyer (table: finishedorders)


ALTER TABLE finishedorders ADD CONSTRAINT finishedorders_Buyer FOREIGN KEY finishedorders_Buyer (cid)
    REFERENCES Buyer (cid)
    ON DELETE CASCADE
    ON UPDATE CASCADE;
-- Reference:  finishedorders_currentorder (table: finishedorders)


ALTER TABLE finishedorders ADD CONSTRAINT finishedorders_currentorder FOREIGN KEY finishedorders_currentorder (oid)
    REFERENCES currentorder (oid)
    ON DELETE CASCADE
    ON UPDATE CASCADE;
-- Reference:  orderdetails_currentorder (table: orderdetails)


ALTER TABLE orderdetails ADD CONSTRAINT orderdetails_currentorder FOREIGN KEY orderdetails_currentorder (oid)
    REFERENCES currentorder (oid)
    ON DELETE CASCADE
    ON UPDATE CASCADE;
-- Reference:  orderdetails_products (table: orderdetails)


ALTER TABLE orderdetails ADD CONSTRAINT orderdetails_products FOREIGN KEY orderdetails_products (pid)
    REFERENCES products (pid)
    ON DELETE CASCADE
    ON UPDATE CASCADE;



-- End of file.

