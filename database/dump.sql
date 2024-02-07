PGDMP     ,                    |            otus    14.5    14.5     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    2710511    otus    DATABASE     a   CREATE DATABASE otus WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Russian_Russia.1251';
    DROP DATABASE otus;
                postgres    false            �            1259    2710520 	   book_info    TABLE     �   CREATE TABLE public.book_info (
    id bigint NOT NULL,
    book_id integer NOT NULL,
    title character varying(200) NOT NULL,
    page_count integer NOT NULL,
    title_words_count integer
);
    DROP TABLE public.book_info;
       public         heap    postgres    false            �            1259    2710519    book_info_id_seq    SEQUENCE     y   CREATE SEQUENCE public.book_info_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.book_info_id_seq;
       public          postgres    false    210            �           0    0    book_info_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.book_info_id_seq OWNED BY public.book_info.id;
          public          postgres    false    209            \           2604    2710523    book_info id    DEFAULT     l   ALTER TABLE ONLY public.book_info ALTER COLUMN id SET DEFAULT nextval('public.book_info_id_seq'::regclass);
 ;   ALTER TABLE public.book_info ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    210    209    210            �          0    2710520 	   book_info 
   TABLE DATA           V   COPY public.book_info (id, book_id, title, page_count, title_words_count) FROM stdin;
    public          postgres    false    210   �       �           0    0    book_info_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.book_info_id_seq', 5, true);
          public          postgres    false    209            ^           2606    2710525    book_info book_info_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.book_info
    ADD CONSTRAINT book_info_pkey PRIMARY KEY (book_id);
 B   ALTER TABLE ONLY public.book_info DROP CONSTRAINT book_info_pkey;
       public            postgres    false    210            _           1259    3506128    i_index    INDEX     ]   CREATE INDEX i_index ON public.book_info USING btree (page_count) WHERE (page_count >= 500);
    DROP INDEX public.i_index;
       public            postgres    false    210    210            �   Z   x�3�4���KUH���VH�,*.�410�4�2�4�)�G�0Kss�d���1K�p�p��!˘�eL9M9�2� z8��bF\1z\\\ ��!     