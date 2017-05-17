
-----------------------------------------------------------------------
-- account
-----------------------------------------------------------------------

DROP TABLE IF EXISTS "account" CASCADE;

CREATE TABLE "account"
(
    "id" serial NOT NULL,
    "is_deleted" INT2 DEFAULT 0 NOT NULL,
    "updated_at" TIMESTAMP,
    "deleted_at" TIMESTAMP,
    "created_at" TIMESTAMP NOT NULL,
    "name" VARCHAR(255),
    "mail" VARCHAR(255),
    "password" VARCHAR(255),
    "accountimg" VARCHAR(255),
    "backimg" VARCHAR(255),
    "maxcapa" INTEGER DEFAULT 209715200,
    "precapa" INTEGER DEFAULT 0,
    "account_status_id" INTEGER DEFAULT 1,
    "provisional_key" VARCHAR(255),
    "randid" VARCHAR(255),
    "langid" INTEGER DEFAULT 1,
    PRIMARY KEY ("id")
);

CREATE INDEX "account_status_id" ON "account" ("account_status_id");

-----------------------------------------------------------------------
-- account_log
-----------------------------------------------------------------------

DROP TABLE IF EXISTS "account_log" CASCADE;

CREATE TABLE "account_log"
(
    "id" serial NOT NULL,
    "is_deleted" INT2 DEFAULT 0 NOT NULL,
    "updated_at" TIMESTAMP,
    "deleted_at" TIMESTAMP,
    "created_at" TIMESTAMP NOT NULL,
    "title" VARCHAR(255),
    "account_id" INTEGER,
    "project_id" INTEGER,
    PRIMARY KEY ("id")
);

-----------------------------------------------------------------------
-- account_status
-----------------------------------------------------------------------

DROP TABLE IF EXISTS "account_status" CASCADE;

CREATE TABLE "account_status"
(
    "id" serial NOT NULL,
    "is_deleted" INT2 DEFAULT 0 NOT NULL,
    "updated_at" TIMESTAMP,
    "deleted_at" TIMESTAMP,
    "created_at" TIMESTAMP NOT NULL,
    "name" VARCHAR(255),
    PRIMARY KEY ("id")
);

-----------------------------------------------------------------------
-- auth_level_status
-----------------------------------------------------------------------

DROP TABLE IF EXISTS "auth_level_status" CASCADE;

CREATE TABLE "auth_level_status"
(
    "id" serial NOT NULL,
    "is_deleted" INT2 DEFAULT 0 NOT NULL,
    "updated_at" TIMESTAMP,
    "deleted_at" TIMESTAMP,
    "created_at" TIMESTAMP NOT NULL,
    "name" VARCHAR(255),
    PRIMARY KEY ("id")
);

-----------------------------------------------------------------------
-- content
-----------------------------------------------------------------------

DROP TABLE IF EXISTS "content" CASCADE;

CREATE TABLE "content"
(
    "id" serial NOT NULL,
    "is_deleted" INT2 DEFAULT 0 NOT NULL,
    "is_directory" INT2 DEFAULT 0 NOT NULL,
    "updated_at" TIMESTAMP,
    "deleted_at" TIMESTAMP,
    "created_at" TIMESTAMP NOT NULL,
    "origin_name" VARCHAR(255),
    "encrypt_name" VARCHAR(255),
    "size" INTEGER DEFAULT 0,
    "account_id" INTEGER,
    "project_id" INTEGER,
    "content_type" VARCHAR(255),
    "parent_directory_id" INTEGER,
    "content_status_id" INTEGER DEFAULT 1,
    PRIMARY KEY ("id")
);

CREATE INDEX "account_id" ON "content" ("account_id");

CREATE INDEX "content_status_id" ON "content" ("content_status_id");

CREATE INDEX "project_id" ON "content" ("project_id");

CREATE INDEX "parent_directory_id" ON "content" ("parent_directory_id");

-----------------------------------------------------------------------
-- content_status
-----------------------------------------------------------------------

DROP TABLE IF EXISTS "content_status" CASCADE;

CREATE TABLE "content_status"
(
    "id" serial NOT NULL,
    "is_deleted" INT2 DEFAULT 0 NOT NULL,
    "updated_at" TIMESTAMP,
    "deleted_at" TIMESTAMP,
    "created_at" TIMESTAMP NOT NULL,
    "name" VARCHAR(255),
    PRIMARY KEY ("id")
);

-----------------------------------------------------------------------
-- project
-----------------------------------------------------------------------

DROP TABLE IF EXISTS "project" CASCADE;

CREATE TABLE "project"
(
    "id" serial NOT NULL,
    "is_deleted" INT2 DEFAULT 0 NOT NULL,
    "updated_at" TIMESTAMP,
    "deleted_at" TIMESTAMP,
    "created_at" TIMESTAMP NOT NULL,
    "name" VARCHAR(255),
    "maxcapa" INTEGER DEFAULT 209715200,
    "precapa" INTEGER DEFAULT 0,
    "backimg" VARCHAR(255),
    "ranid" VARCHAR(255),
    "account_id" INTEGER,
    PRIMARY KEY ("id")
);

-----------------------------------------------------------------------
-- project_member
-----------------------------------------------------------------------

DROP TABLE IF EXISTS "project_member" CASCADE;

CREATE TABLE "project_member"
(
    "id" serial NOT NULL,
    "is_deleted" INT2 DEFAULT 0 NOT NULL,
    "updated_at" TIMESTAMP,
    "deleted_at" TIMESTAMP,
    "created_at" TIMESTAMP NOT NULL,
    "account_id" INTEGER,
    "project_id" INTEGER,
    "auth_level_status_id" INTEGER DEFAULT 1,
    PRIMARY KEY ("id")
);

CREATE INDEX "auth_level_status_id" ON "project_member" ("auth_level_status_id");

-----------------------------------------------------------------------
-- mail
-----------------------------------------------------------------------

DROP TABLE IF EXISTS "mail" CASCADE;

CREATE TABLE "mail"
(
    "id" serial NOT NULL,
    "is_deleted" INT2 DEFAULT 0 NOT NULL,
    "updated_at" TIMESTAMP,
    "deleted_at" TIMESTAMP,
    "created_at" TIMESTAMP NOT NULL,
    "title" VARCHAR(255),
    "text" TEXT,
    PRIMARY KEY ("id")
);

-----------------------------------------------------------------------
-- send_mail_status
-----------------------------------------------------------------------

DROP TABLE IF EXISTS "send_mail_status" CASCADE;

CREATE TABLE "send_mail_status"
(
    "id" serial NOT NULL,
    "is_deleted" INT2 DEFAULT 0 NOT NULL,
    "updated_at" TIMESTAMP,
    "deleted_at" TIMESTAMP,
    "created_at" TIMESTAMP NOT NULL,
    "name" TEXT,
    "snum" TEXT,
    PRIMARY KEY ("id")
);

-----------------------------------------------------------------------
-- send_mails
-----------------------------------------------------------------------

DROP TABLE IF EXISTS "send_mails" CASCADE;

CREATE TABLE "send_mails"
(
    "id" serial NOT NULL,
    "is_deleted" INT2 DEFAULT 0 NOT NULL,
    "updated_at" TIMESTAMP,
    "deleted_at" TIMESTAMP,
    "created_at" TIMESTAMP NOT NULL,
    "title" VARCHAR(255),
    "name" TEXT,
    "from_name" TEXT,
    "to_name" TEXT,
    "to_address" TEXT,
    "subject" TEXT,
    "body" TEXT,
    "group_code" TEXT,
    "from_address" TEXT,
    "finish_dt" TIMESTAMP,
    "result" INT2 DEFAULT 0 NOT NULL,
    "send_date" DATE,
    "send_time" TIME,
    "fw_to" TEXT,
    "server_ip" TEXT,
    "server_name" TEXT,
    "send_mail_status_id" INT8 DEFAULT 1,
    PRIMARY KEY ("id")
);

ALTER TABLE "account" ADD CONSTRAINT "account_FK_1"
    FOREIGN KEY ("account_status_id")
    REFERENCES "account_status" ("id")
    ON UPDATE RESTRICT
    ON DELETE RESTRICT;

ALTER TABLE "account_log" ADD CONSTRAINT "account_log_FK_1"
    FOREIGN KEY ("account_id")
    REFERENCES "account" ("id")
    ON UPDATE RESTRICT
    ON DELETE RESTRICT;

ALTER TABLE "account_log" ADD CONSTRAINT "account_log_FK_2"
    FOREIGN KEY ("project_id")
    REFERENCES "project" ("id")
    ON UPDATE RESTRICT
    ON DELETE RESTRICT;

ALTER TABLE "content" ADD CONSTRAINT "content_FK_1"
    FOREIGN KEY ("account_id")
    REFERENCES "account" ("id")
    ON UPDATE RESTRICT
    ON DELETE RESTRICT;

ALTER TABLE "content" ADD CONSTRAINT "content_FK_2"
    FOREIGN KEY ("project_id")
    REFERENCES "project" ("id")
    ON UPDATE RESTRICT
    ON DELETE RESTRICT;

ALTER TABLE "content" ADD CONSTRAINT "content_FK_3"
    FOREIGN KEY ("parent_directory_id")
    REFERENCES "content" ("id")
    ON UPDATE RESTRICT
    ON DELETE RESTRICT;

ALTER TABLE "content" ADD CONSTRAINT "content_FK_4"
    FOREIGN KEY ("content_status_id")
    REFERENCES "content_status" ("id")
    ON UPDATE RESTRICT
    ON DELETE RESTRICT;

ALTER TABLE "project" ADD CONSTRAINT "project_FK_1"
    FOREIGN KEY ("account_id")
    REFERENCES "account" ("id")
    ON UPDATE RESTRICT
    ON DELETE RESTRICT;

ALTER TABLE "project_member" ADD CONSTRAINT "project_member_FK_1"
    FOREIGN KEY ("account_id")
    REFERENCES "account" ("id")
    ON UPDATE RESTRICT
    ON DELETE RESTRICT;

ALTER TABLE "project_member" ADD CONSTRAINT "project_member_FK_2"
    FOREIGN KEY ("project_id")
    REFERENCES "project" ("id")
    ON UPDATE RESTRICT
    ON DELETE RESTRICT;

ALTER TABLE "project_member" ADD CONSTRAINT "project_member_FK_3"
    FOREIGN KEY ("auth_level_status_id")
    REFERENCES "auth_level_status" ("id")
    ON UPDATE RESTRICT
    ON DELETE RESTRICT;
