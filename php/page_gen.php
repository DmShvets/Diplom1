<?php

/*************************ХРАМИ*************************/

if ( isset( $_GET[ 'church_odessa' ] ) )           { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 1 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_kyivska' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 2 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_kyiv' ] ) )             { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 3 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_kherson' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 4 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_mykolaiv' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 5 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_zaporozhye' ] ) )       { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 6 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_dnipropetrovsk' ] ) )   { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 7 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_kharkiv' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 8 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_vinitska' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 9 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_volynska' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 10 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_donetsk' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 11 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_zhytomyr' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 12 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_zakarpatska' ] ) )      { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 13 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_ivano-frankivska' ] ) ) { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 14 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_kirovogradska' ] ) )    { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 15 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_luganska' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 16 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_lvivska' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 17 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_poltavska' ] ) )        { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 18 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_rivnenska' ] ) )        { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 19 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_sumska' ] ) )           { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 20 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_ternopilska' ] ) )      { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 21 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_khmelnytska' ] ) )      { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 22 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_сherkaska' ] ) )        { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 23 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_chernivetska' ] ) )     { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 24 AND S.place = 'Храми'"; }
if ( isset( $_GET[ 'church_chernigivska' ] ) )     { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_church R ON S.id_region = R.id_region WHERE S.id_region = 25 AND S.place = 'Храми'"; }

/*************************ПАРКИ*************************/

if ( isset( $_GET[ 'park_odessa' ] ) )           { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 1 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_kyivska' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 2 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_kyiv' ] ) )             { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 3 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_kherson' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 4 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_mykolaiv' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 5 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_zaporozhye' ] ) )       { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 6 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_dnipropetrovsk' ] ) )   { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 7 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_kharkiv' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 8 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_vinitska' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 9 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_volynska' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 10 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_donetsk' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 11 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_zhytomyr' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 12 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_zakarpatska' ] ) )      { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 13 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_ivano-frankivska' ] ) ) { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 14 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_kirovogradska' ] ) )    { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 15 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_luganska' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 16 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_lvivska' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 17 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_poltavska' ] ) )        { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 18 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_rivnenska' ] ) )        { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 19 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_sumska' ] ) )           { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 20 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_ternopilska' ] ) )      { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 21 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_khmelnytska' ] ) )      { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 22 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_сherkaska' ] ) )        { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 23 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_chernivetska' ] ) )     { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 24 AND S.place = 'Парки'"; }
if ( isset( $_GET[ 'park_chernigivska' ] ) )     { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_park R ON S.id_region = R.id_region WHERE S.id_region = 25 AND S.place = 'Парки'"; }

/************************КУРОРТИ************************/

if ( isset( $_GET[ 'resorts_odessa' ] ) )           { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 1 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_kyivska' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 2 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_kyiv' ] ) )             { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 3 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_kherson' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 4 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_mykolaiv' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 5 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_zaporozhye' ] ) )       { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 6 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_dnipropetrovsk' ] ) )   { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 7 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_kharkiv' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 8 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_vinitska' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 9 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_volynska' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 10 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_donetsk' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 11 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_zhytomyr' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 12 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_zakarpatska' ] ) )      { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 13 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_ivano-frankivska' ] ) ) { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 14 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_kirovogradska' ] ) )    { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 15 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_luganska' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 16 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_lvivska' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 17 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_poltavska' ] ) )        { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 18 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_rivnenska' ] ) )        { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 19 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_sumska' ] ) )           { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 20 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_ternopilska' ] ) )      { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 21 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_khmelnytska' ] ) )      { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 22 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_сherkaska' ] ) )        { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 23 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_chernivetska' ] ) )     { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 24 AND S.place = 'Курорти'"; }
if ( isset( $_GET[ 'resorts_chernigivska' ] ) )     { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_resort R ON S.id_region = R.id_region WHERE S.id_region = 25 AND S.place = 'Курорти'"; }

/************************ФОРТЕЦІ************************/

if ( isset( $_GET[ 'castle_odessa' ] ) )           { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 1 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_kyivska' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 2 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_kyiv' ] ) )             { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 3 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_kherson' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 4 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_mykolaiv' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 5 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_zaporozhye' ] ) )       { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 6 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_dnipropetrovsk' ] ) )   { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 7 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_kharkiv' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 8 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_vinitska' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 9 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_volynska' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 10 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_donetsk' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 11 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_zhytomyr' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 12 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_zakarpatska' ] ) )      { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 13 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_ivano-frankivska' ] ) ) { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 14 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_kirovogradska' ] ) )    { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 15 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_luganska' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 16 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_lvivska' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 17 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_poltavska' ] ) )        { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 18 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_rivnenska' ] ) )        { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 19 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_sumska' ] ) )           { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 20 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_ternopilska' ] ) )      { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 21 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_khmelnytska' ] ) )      { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 22 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_сherkaska' ] ) )        { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 23 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_chernivetska' ] ) )     { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 24 AND S.place = 'Фортеці'"; }
if ( isset( $_GET[ 'castle_chernigivska' ] ) )     { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_castle R ON S.id_region = R.id_region WHERE S.id_region = 25 AND S.place = 'Фортеці'"; }
/*************************МУЗЕЇ*************************/

if ( isset( $_GET[ 'museum_odessa' ] ) )           { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 1 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_kyivska' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 2 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_kyiv' ] ) )             { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 3 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_kherson' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 4 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_mykolaiv' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 5 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_zaporozhye' ] ) )       { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 6 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_dnipropetrovsk' ] ) )   { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 7 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_kharkiv' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 8 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_vinitska' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 9 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_volynska' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 10 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_donetsk' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 11 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_zhytomyr' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 12 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_zakarpatska' ] ) )      { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 13 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_ivano-frankivska' ] ) ) { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 14 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_kirovogradska' ] ) )    { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 15 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_luganska' ] ) )         { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 16 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_lvivska' ] ) )          { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 17 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_poltavska' ] ) )        { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 18 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_rivnenska' ] ) )        { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 19 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_sumska' ] ) )           { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 20 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_ternopilska' ] ) )      { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 21 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_khmelnytska' ] ) )      { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 22 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_сherkaska' ] ) )        { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 23 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_chernivetska' ] ) )     { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 24 AND S.place = 'Музеї'"; }
if ( isset( $_GET[ 'museum_chernigivska' ] ) )     { $query = "SELECT * FROM main_should_visit S LEFT JOIN region_museum R ON S.id_region = R.id_region WHERE S.id_region = 25 AND S.place = 'Музеї'"; }
/*******************Створення сторінки*******************/
$b=0;
include_once 'read_from_DB.php';
while ( $row = mysqli_fetch_assoc( $result ) ) {
    if ( $b==0 ) {
        create_page_start( $row );
        $b++;
    }
    show( $row[ "_name" ], $row[ "imgName" ], $row[ "Address" ], $row[ "Paragraph1" ], $row[ "Paragraph2" ], $row[ "Paragraph3" ], $b);
    $b++;
}
create_page_end($b);
/********************************************************/

/**
 *
 * Створює головну сторінку "Варто відвідати" конкретного місця ( храму, музею і т.д. ) регіону
 *
 * @param  {string}  place  Назва місця ( храм, музей, фортеця і т.д. )
 * @param  {string}  city   Назва області
 * @param  {string}  img    Назва зображення ( зображення з розщиренням .jpg, в назві розширення вказувати не потрібно, зображення має знаходитись в папці img )
 * @param  {string}  p1     Містить в собі значення першого абзацу
 * @param  {string}  p2     Містить в собі значення другого абзацу
 *
 */
function create_page_start( $row ) {
    $place = $row[ "place" ];
    $city  = $row[ "city" ];
    $img   = $row[ "img" ];
    $p1    = $row[ "main_paragraph1" ];
    $p2    = $row[ "main_paragraph2" ];
    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <link  rel = "stylesheet"  href = "https://unpkg.com/aos@next/dist/aos.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="../script/script.js"></script>
        <script src="../script/script_page.js"></script>
        <title>Музей туризму</title>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
        <a class="navbar-brand" href="../index.php">
            <img class="logo" src="../img/ukraine-logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Головна <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Області</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
    include_once "links.php";
    foreach($regions as $region){
        menu($region, '');
    }
    echo '
                </div>
                </li>
                <li class="nav-item">
					<a class="nav-link" href="https://www.booking.com/searchresults.uk.html?aid=397594&label=gog235jc-1DCAEoggI46AdIKVgDaOkBiAEBmAEpuAEXyAEM2AED6AEB-AECiAIBqAIDuALakPT2BcACAdICJDU4OTVhYjViLTYxNWUtNGIzNi1hMjM5LTgxZDg3MjcwOTMzZNgCBOACAQ&sid=26f036ee79557394b419e201e4bbe750&sb=1&sb_lp=1&src=index&src_elem=sb&error_url=https%3A%2F%2Fwww.booking.com%2Findex.uk.html%3Faid%3D397594%3Blabel%3Dgog235jc-1DCAEoggI46AdIKVgDaOkBiAEBmAEpuAEXyAEM2AED6AEB-AECiAIBqAIDuALakPT2BcACAdICJDU4OTVhYjViLTYxNWUtNGIzNi1hMjM5LTgxZDg3MjcwOTMzZNgCBOACAQ%3Bsid%3D26f036ee79557394b419e201e4bbe750%3Bsb_price_type%3Dtotal%26%3B&ss=%D0%A3%D0%BA%D1%80%D0%B0%D1%97%D0%BD%D0%B0&is_ski_area=&checkin_year=&checkin_month=&checkout_year=&checkout_month=&group_adults=2&group_children=0&no_rooms=1&b_h4u_keep_filters=&from_sf=1&ss_raw=Er&ac_position=0&ac_langcode=uk&ac_click_type=b&dest_id=220&dest_type=country&place_id_lat=49.2776&place_id_lon=31.6119&search_pageview_id=0d9f6d2ddfe70072&search_selected=true">Готелі</a>
				</li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Варто відвідати
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="should_visit.php?castle_main=true">Фортеці</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="should_visit.php?resort_main=true">Курорти</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="should_visit.php?park_main=true">Парки</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="should_visit.php?church_main=true">Храми</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="should_visit.php?museum_main=true">Музеї</a>
                    </div>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="https://www.ktgg.kiev.ua/uk/">КТГГ</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="https://www.ktgg.kiev.ua/uk/contacts.html">Наші контакти</a>
              </li>

                    <li class="nav-item">

                </li>
                        <li>
                        <a id="search" class="search-btn">
                            <i class="fa fa-search"></i>
                        </a></li>
                </ul>
                <div class="search-form">
                    <form class="" action="Search.php?go" method="post" id="searchform">
                        <input type="text" name="name" value="" placeholder="Пошук">
                        <a class="close"><i class="fa fa-times"></i></a>
                        <button type="submit" class="search-go" name="submit" value="Search">Знайти</input>
                    </form>
                </div>
            </div>
            </div>
        </nav>
    </header>
    <div class="data_content">
    <section id="main_block" class="info_page">
        <div class="container h100">
            <h2>'. $place . ' ' . $city . '</h2>
            <div class="placeBox info">
                <div class="imgBx">
                    <img src="../img/'. $img .'.jpg" class="img-fluid">
                </div>
                <div class="content_info info">
                    <h2>' . $p1 . '</h2>
                    <p>' . $p2 . '</p>
                </div>
                <!--div class="more_info">
                    <h2><a href="#block">Детальніше
                    <i class="fa fa-angle-double-down"></i></a></h2>
                </div-->
        </div></div>
     </section>
    <section id="block" class="block_info">
    <div class="container h100">
    ';
}
/**
 * Створює блоки для наповнення інформацією сторінок "Варто відвідати" для конкретного регіону
 *
 * @param  {string}  placeName Назва об'єкту, місця і т.п.
 * @param  {string}  imgName   Назва зображення об'єкту, місця і т.п. ( зображення з розщиренням .jpg, в назві розширення вказувати не потрібно, назва зображення витягується з БД )
 * @param  {string}  Address   Адреса місця ( посилання на Google maps ( значення витягується з БД ) )
 * @param  {string}  p1        Містить в собі значення першого абзацу ( значення витягується з БД )
 * @param  {string}  p2        Містить в собі значення другого абзацу ( значення витягується з БД )
 * @param  {string}  p3        Містить в собі значення третього абзацу ( значення витягується з БД )
 *
 */
function show( $PlaceName, $imgName, $Address, $p1, $p2, $p3, $id ) {
    echo '
    <div class="placeBox info nhide" id = "div'. $id .'">
        <div class="name_info">
            <h2>'. $PlaceName .'</h2>
        </div>
        <div class="link_down">
        <div class="imgBx">
            <img src="../img/'.$imgName.'.jpg" class="img-fluid">
        </div>
        <div class="linkmap">
          <a href="' . $Address . '">Переглянути на карті</a>
        </div>
        </div>
        <div class="content_info">
            <p>'.$p1.'</p>
            <p>'.$p2.'</p>
            <p>'.$p3.'</p>
        </div>
    </div>
    ';
}

function create_page_end( $b ) {
    echo '
            <div class="link_info" id="loadmore" at_all="'.$b.'">
                <span id="load_more" num_loaded="3">Більше_місць</span >
            </div>
        </div>
    </section>
    </div>
        <!--////////////////////CONTENt\\\\\\\\\\\\\\\\\\\\\\\\-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="sci">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google"></i></a></li>
                        </ul>
                        <p class="cpryt">
                            © 2020 All Rights Reserved | Created by <a href="#">&laquo;ShO‽&raquo;</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        </body>
        </html>';
}
?>
