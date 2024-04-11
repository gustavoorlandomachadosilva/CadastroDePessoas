--
-- PostgreSQL database dump
--

-- Dumped from database version 16.1
-- Dumped by pg_dump version 16.1

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: usersequence; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.usersequence
    START WITH 4
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.usersequence OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: userposjava; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.userposjava (
    id bigint DEFAULT nextval('public.usersequence'::regclass) NOT NULL,
    nome character varying(255),
    email character varying(255)
);


ALTER TABLE public.userposjava OWNER TO postgres;

--
-- Data for Name: userposjava; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.userposjava (id, nome, email) FROM stdin;
1	teste1	teste1@gmail.com
2	teste2	teste2@gmail.com
3	teste3	teste3@gmail.com
\.


--
-- Name: usersequence; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.usersequence', 4, true);


--
-- Name: userposjava user_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.userposjava
    ADD CONSTRAINT user_pk PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

