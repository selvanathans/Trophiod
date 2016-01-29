--
-- PostgreSQL database dump
--

-- Dumped from database version 9.3.5
-- Dumped by pg_dump version 9.3.5
-- Started on 2016-01-21 17:48:57 IST

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 172 (class 3079 OID 11787)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 1979 (class 0 OID 0)
-- Dependencies: 172
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 171 (class 1259 OID 115623)
-- Name: cand; Type: TABLE; Schema: public; Owner: broadlin; Tablespace: 
--

CREATE TABLE cand (
    id integer NOT NULL,
    candname character varying,
    address character varying,
    phone bigint,
    email character varying,
    qual character varying,
    remarks character varying
);


ALTER TABLE public.cand OWNER TO broadlin;

--
-- TOC entry 170 (class 1259 OID 115621)
-- Name: cand_id_seq; Type: SEQUENCE; Schema: public; Owner: broadlin
--

CREATE SEQUENCE cand_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cand_id_seq OWNER TO broadlin;

--
-- TOC entry 1980 (class 0 OID 0)
-- Dependencies: 170
-- Name: cand_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: broadlin
--

ALTER SEQUENCE cand_id_seq OWNED BY cand.id;


--
-- TOC entry 1860 (class 2604 OID 115626)
-- Name: id; Type: DEFAULT; Schema: public; Owner: broadlin
--

ALTER TABLE ONLY cand ALTER COLUMN id SET DEFAULT nextval('cand_id_seq'::regclass);


--
-- TOC entry 1971 (class 0 OID 115623)
-- Dependencies: 171
-- Data for Name: cand; Type: TABLE DATA; Schema: public; Owner: broadlin
--

COPY cand (id, candname, address, phone, email, qual, remarks) FROM stdin;
9	selva nathan	anaikarai street\r\ntenkasi	919659966014	selvahere7@gmail.com	B.E	Good
\.


--
-- TOC entry 1981 (class 0 OID 0)
-- Dependencies: 170
-- Name: cand_id_seq; Type: SEQUENCE SET; Schema: public; Owner: broadlin
--

SELECT pg_catalog.setval('cand_id_seq', 9, true);


--
-- TOC entry 1862 (class 2606 OID 115631)
-- Name: cand_pkey; Type: CONSTRAINT; Schema: public; Owner: broadlin; Tablespace: 
--

ALTER TABLE ONLY cand
    ADD CONSTRAINT cand_pkey PRIMARY KEY (id);


--
-- TOC entry 1978 (class 0 OID 0)
-- Dependencies: 5
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2016-01-21 17:48:57 IST

--
-- PostgreSQL database dump complete
--

