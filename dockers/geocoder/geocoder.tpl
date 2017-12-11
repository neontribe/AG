[fs]
classifiers_path=./classifiers
download_path=./download
iati_xsd_path=./xsd
docs_queue_path=./docs


[standford]
#server type can be CORE or NER
server_type=NER
#if use_server is true set the following two parameters
host = OPENAG_NERSERVER
port = OPENAG_PORT

[web]
port=9095

[geonames]
baseurl = http://api.geonames.org/searchJSON?
username = sdimunzio


[ie]
default_classifier=default
ignore_entities:North-West South-East North-East South-West
ignore_gap_chars=, - \n

[postgres]
user_name=postgres
password=postgres
port=5432
host=localhost
db_name=geocoder
