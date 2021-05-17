/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : PostgreSQL
 Source Server Version : 130002
 Source Host           : localhost:5432
 Source Catalog        : cruddb
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 130002
 File Encoding         : 65001

 Date: 15/05/2021 05:01:44
*/


-- ----------------------------
-- Sequence structure for barang_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."barang_id_seq";
CREATE SEQUENCE "public"."barang_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 32767
START 1
CACHE 1;

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS "public"."barang";
CREATE TABLE "public"."barang" (
  "id" int2 NOT NULL DEFAULT nextval('barang_id_seq'::regclass),
  "nama" varchar(255) COLLATE "pg_catalog"."default",
  "harga" money,
  "deskripsi" text COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO "public"."barang" VALUES (1, 'buku', '$4,000.00', '-');

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."barang_id_seq"
OWNED BY "public"."barang"."id";
SELECT setval('"public"."barang_id_seq"', 3, true);

-- ----------------------------
-- Primary Key structure for table barang
-- ----------------------------
ALTER TABLE "public"."barang" ADD CONSTRAINT "barang_pkey" PRIMARY KEY ("id");
