# PRELOAD####

# Libraries

library(ape)

# Load annotations
rota <- read.table("rota_annotations.txt",header=T,row.names=NULL,sep="\t",stringsAsFactors=FALSE)

# SETUP ####

# Host Null
rota.nohost <- rota[is.na(rota$host),]
# table(rota.nohost$note)
# table(rota.nohost$organism)

# Country Null
rota.nocountry <- rota[is.na(rota$country),]
# table(rota.nocountry$note)
# table(rota.nocountry$organism)

# Date Null
rota.nodate <- rota[is.na(rota$collection_date),]
# table(rota.nocountry$note)
# table(rota.nocountry$organism)

# New Table and Columns

# Create new data object
rota2 <- rota
#summary(rota2)

# Assign Host2 Column
rota2$host2 <- ""

# Assign Country2 Column
rota2$country2 <- ""

# Assign Collection_date2 Column
rota2$collection_date2 <- ""

# HOSTS####

# table(rota2$host)

# Use the below for testing
table(rota2$host[grep("omo sapiens",rota2$host)])
table(rota2$organism[grep("ig",rota2$organism)])
table(rota2$note[grep("ig",rota2$note)])

# Higher order classifications // place in front so that the fields can be overwritten later
# Avian
rota2$host2[grep("vian",rota2$host)] <- "Avian"
rota2$host2[grep("vian",rota2$organism)] <- "Avian"
rota2$host2[grep("vian",rota2$strain)] <- "Avian"
# Murine
rota2$host2[grep("urine",rota2$organism)] <- "Murine"
rota2$host2[grep("urine",rota2$strain)] <- "Murine"

# Alpaca
rota2$host2[grep("lpaca",rota2$host)] <- "Alpaca"
rota2$host2[grep("acos",rota2$host)] <- "Alpaca"

# Antelope
rota2$host2[grep("ntelope",rota2$host)] <- "Antelope"

# Bat
rota2$host2[grep("bat",rota2$host)] <- "Bat"
rota2$host2[grep("bat",ignore.case=TRUE, rota2$strain)] <- "Bat"
rota2$host2[grep("ipposideros",rota2$host)] <- "Bat"
rota2$host2[grep("hinolophus",rota2$host)] <- "Bat"
rota2$host2[grep("arollia",rota2$host)] <- "Bat"
rota2$host2[grep("olossus",rota2$host)] <- "Bat"
rota2$host2[grep("yotis",rota2$host)] <- "Bat"
rota2$host2[grep("idolon",rota2$host)] <- "Bat"
rota2$host2[grep("Bat",rota2$organism)] <- "Bat"
rota2$host2[grep("bat",rota2$organism)] <- "Bat"

# Camel
rota2$host2[grep("amel$",rota2$host)] <- "Camel"
rota2$host2[grep("amelus",rota2$host)] <- "Camel"

# Cat
rota2$host2[grep("cat$",rota2$host)] <- "Cat"
rota2$host2[grep("elis",rota2$host)] <- "Cat"
rota2$host2[grep("eline",rota2$organism)] <- "Cat"

# Chicken
rota2$host2[grep("hicken",rota2$host)] <- "Chicken"
rota2$host2[grep("hicken",rota2$organism)] <- "Chicken"
rota2$host2[grep("gallus",rota2$host)] <- "Chicken"

# Cow
rota2$host2[grep("ovine",rota2$host)] <- "Cow"
rota2$host2[grep("alf",rota2$host)] <- "Cow"
rota2$host2[grep("attle",rota2$host)] <- "Cow"
rota2$host2[grep("ow",rota2$host)] <- "Cow"
rota2$host2[grep("ow",rota2$strain)] <- "Cow"
rota2$host2[grep("Bos",rota2$host)] <- "Cow"
rota2$host2[grep("ovine",rota2$organism)] <- "Cow" 
rota2$host2[grep("raffe",rota2$organism)] <- "Giraffe" #giraffe under bovine
rota2$host2[grep("ow",rota2$organism)] <- "Cow"
rota2$host2[grep("alf",rota2$note)] <- "Cow"

# Deer
rota2$host2[grep("untiacus",rota2$host)] <- "Deer"

# Dog
rota2$host2[grep("og",rota2$host)] <- "Dog"
rota2$host2[grep("anine",rota2$host)] <- "Dog"
rota2$host2[grep("anis",rota2$host)] <- "Dog"
rota2$host2[grep("anine",rota2$organism)] <- "Dog"

# Donkey
rota2$host2[grep("asinus",rota2$host)] <- "Donkey"

# Duck
rota2$host2[grep("elanitta",rota2$host)] <- "Duck"

# Giraffe
rota2$host2[grep("raffe",rota2$host)] <- "Giraffe"
rota2$host2[grep("raffe",rota2$organism)] <- "Giraffe"

# Goat
rota2$host2[grep("oat",rota2$host)] <- "Goat"
rota2$host2[grep("apr",rota2$host)] <- "Goat"
rota2$host2[grep("apr",rota2$organism)] <- "Goat"

# Guanaco
rota2$host2[grep("ama",rota2$host)] <- "Guanaco"

# Gull
rota2$host2[grep("arus",rota2$host)] <- "Gull"

# Horse
rota2$host2[grep("quine",rota2$host)] <- "Horse"
rota2$host2[grep("orse",rota2$host)] <- "Horse"
rota2$host2[grep("foal",rota2$host)] <- "Horse"
rota2$host2[grep("caballus",rota2$host)] <- "Horse"
rota2$host2[grep("orse",rota2$organism)] <- "Horse"
rota2$host2[grep("quine",rota2$organism)] <- "Horse"
rota2$host2[grep("quine",rota2$note)] <- "Horse"

# Human
rota2$host2[grep("sapiens",rota2$host)] <- "Human"
rota2$host2[grep("uman",rota2$organism)] <- "Human"
rota2$host2[grep("Hu/",rota2$organism)] <- "Human"
rota2$host2[grep("uman g",rota2$note)] <- "Human"
rota2$host2[grep("uman ro",rota2$note)] <- "Human"
rota2$host2[grep("hild",rota2$note)] <- "Human"
rota2$host2[grep("atient",rota2$note)] <- "Human"
rota2$host2[grep("nfant",rota2$note)] <- "Human"
rota2$host2[grep("uman",rota2$strain)] <- "Human"

# Monkey
rota2$host2[grep("onkey",rota2$host)] <- "Monkey"
rota2$host2[grep("acaca",rota2$host)] <- "Monkey"
rota2$host2[grep("hesus",rota2$organism)] <- "Monkey"

# Mouse
rota2$host2[grep("ouse",rota2$host)] <- "Mouse"
rota2$host2[grep("usculus",rota2$host)] <- "Mouse"

# Mussle
rota2$host2[grep("ussle",rota2$host)] <- "Mussel"

# Oyster
rota2$host2[grep("yster",rota2$host)] <- "Oyster"

# Panda
rota2$host2[grep("iluropoda",rota2$host)] <- "Panda"
rota2$host2[grep("anda",rota2$organism)] <- "Panda"

# Partridge
rota2$host2[grep("artridge",rota2$host)] <- "Partridge"

# Pheasant
rota2$host2[grep("heasant",rota2$host)] <- "Pheasant"

# Pig
rota2$host2[grep("ig$",rota2$host)] <- "Pig"
rota2$host2[grep("ig-",rota2$strain)] <- "Pig"
rota2$host2[grep("iglet",rota2$host)] <- "Pig"
rota2$host2[grep("crofa",rota2$host)] <- "Pig"
rota2$host2[grep("orcine",rota2$host)] <- "Pig"
rota2$host2[grep("wine",rota2$host)] <- "Pig"
rota2$host2[grep("ig/",rota2$organism)] <- "Pig"
rota2$host2[grep("ig-",rota2$organism)] <- "Pig"
rota2$host2[grep("wine",rota2$organism)] <- "Pig"
rota2$host2[grep("orcine",rota2$organism)] <- "Pig"

# Pigeon
rota2$host2[grep("geon",rota2$host)] <- "Pigeon"
rota2$host2[grep("geon",rota2$organism)] <- "Pigeon"

# Rabbit
rota2$host2[grep("abbit",rota2$host)] <- "Rabbit"
rota2$host2[grep("abbit",rota2$strain)] <- "Rabbit"
rota2$host2[grep("apine",rota2$host)] <- "Rabbit"
rota2$host2[grep("ryctolagus",rota2$host)] <- "Rabbit"
rota2$host2[grep("abbit",rota2$organism)] <- "Rabbit"
rota2$host2[grep("apine",rota2$organism)] <- "Rabbit"

# Rat
rota2$host2[grep("rat",rota2$host)] <- "Rat"
rota2$host2[grep("Rat",rota2$host)] <- "Rat"
rota2$host2[grep("Rat-",rota2$organism)] <- "Rat"
rota2$host2[grep("Rat ",rota2$organism)] <- "Rat"

# Seal
rota2$host2[grep("rctocephalus",rota2$host)] <- "Seal"

# Sea Lion
rota2$host2[grep("alophus",rota2$host)] <- "Sea Lion"

# Squirrel
rota2$host2[grep("quirrel",rota2$host)] <- "Squirrel"
rota2$host2[grep("quirrel",rota2$organism)] <- "Squirrel"

# Sheep
rota2$host2[grep("heep",rota2$host)] <- "Sheep"
rota2$host2[grep("amb",rota2$host)] <- "Sheep"
rota2$host2[grep("aries",rota2$host)] <- "Sheep"
rota2$host2[grep("heep",rota2$organism)] <- "Sheep"
rota2$host2[grep("amb",rota2$organism)] <- "Sheep"

# Simian
rota2$host2[grep("imian",rota2$host)] <- "Simian"
rota2$host2[grep("imian",rota2$organism)] <- "Simian"
rota2$host2[grep("imian",rota2$strain)] <- "Simian"

# Shellfish
rota2$host2[grep("hellfish",rota2$host)] <- "Shellfish"

# Sugar Glider
rota2$host2[grep("etaurus",rota2$host)] <- "Sugar Glider"

# Turkey
rota2$host2[grep("urkey",rota2$host)] <- "Turkey"
rota2$host2[grep("eleagris",rota2$host)] <- "Turkey"
rota2$host2[grep("urkey",rota2$organism)] <- "Turkey"

# Vicuna
rota2$host2[grep("vicugna",rota2$host)] <- "Vicuna"

# COUNTRY####

# Summary
# table(rota2$country)

# Use the below for testing
table(rota2$country[grep("USA",rota2$country)])

# Angola
rota2$country2[grep("ngola",rota2$country)] <- "Angola"

# Argentina
rota2$country2[grep("rgentina",rota2$country)] <- "Argentina"

# Australia
rota2$country2[grep("ustralia",rota2$country)] <- "Australia"

# Bangladesh
rota2$country2[grep("desh",rota2$country)] <- "Bangladesh"

# Barbados
rota2$country2[grep("arbados",rota2$country)] <- "Barbados"

# Belarus
rota2$country2[grep("elarus",rota2$country)] <- "Belarus"

# Belgium
rota2$country2[grep("elgium",rota2$country)] <- "Belgium"

# Bhutan
rota2$country2[grep("hutan",rota2$country)] <- "Bhutan"

# Botswana
rota2$country2[grep("otswana",rota2$country)] <- "Botswana"

# Brazil
rota2$country2[grep("razil",rota2$country)] <- "Brazil"
rota2$country2[grep("razil",rota2$organism)] <- "Brazil"

# Bulgaria
rota2$country2[grep("ulgaria",rota2$country)] <- "Bulgaria"

# Burkina Faso
rota2$country2[grep("urkina",rota2$country)] <- "Burkina Faso"

# Cambodia
rota2$country2[grep("ambodia",rota2$country)] <- "Cambodia"

# Cameroon
rota2$country2[grep("ameroon",rota2$country)] <- "Cameroon"

# Canada
rota2$country2[grep("anada",rota2$country)] <- "Canada"

# Chile
rota2$country2[grep("ile",rota2$country)] <- "Chile"

# China
rota2$country2[grep("hina",rota2$country)] <- "China"
rota2$country2[grep("Kong",rota2$country)] <- "China"
rota2$country2[grep("HKG",rota2$organism)] <- "China"
rota2$country2[grep("CN/",rota2$organism)] <- "China"

# Colombia
rota2$country2[grep("olombia",rota2$country)] <- "Colombia"

# Congo
rota2$country2[grep("ongo",rota2$country)] <- "Congo"

# Costa Rica
rota2$country2[grep("osta",rota2$country)] <- "Costa Rica"

# Cote d'Ivoire
rota2$country2[grep("ote",rota2$country)] <- "Cote d'Ivoire"

# Croatia
rota2$country2[grep("atia",rota2$country)] <- "Croatia"

# Cuba
rota2$country2[grep("uba",rota2$country)] <- "Cuba"

# Czech Republic
rota2$country2[grep("zech",rota2$country)] <- "Czech Republic"

# Denmark
rota2$country2[grep("enmark",rota2$country)] <- "Denmark"

# Ecuador
rota2$country2[grep("cuador",rota2$country)] <- "Ecuador"

# Egypt
rota2$country2[grep("gypt",rota2$country)] <- "Egypt"

# Ethiopia
rota2$country2[grep("thiopia",rota2$country)] <- "Ethiopia"

# Finland
rota2$country2[grep("inland",rota2$country)] <- "Finland"

# France
rota2$country2[grep("rance",rota2$country)] <- "France"

# Gabon
rota2$country2[grep("abon",rota2$country)] <- "Gabon"

# Gambia
rota2$country2[grep("Gambia",rota2$country)] <- "Gambia"

# Germany
rota2$country2[grep("ermany",rota2$country)] <- "Germany"

# Ghana
rota2$country2[grep("hana",rota2$country)] <- "Ghana"

# Greece
rota2$country2[grep("reece",rota2$country)] <- "Greece"

# Guatemala
rota2$country2[grep("uatemala",rota2$country)] <- "Guatemala"

# Guinea-Bissau
rota2$country2[grep("issau",rota2$country)] <- "Guinea-Bissau"

# Honduras
rota2$country2[grep("onduras",rota2$country)] <- "Honduras"

# Hungary
rota2$country2[grep("ungary",rota2$country)] <- "Hungary"

# India
rota2$country2[grep("ndia",rota2$country)] <- "India"
rota2$country2[grep("ndia",rota2$strain)] <- "India"

# Indonesia
rota2$country2[grep("ndonesia",rota2$country)] <- "Indonesia"

# Iran
rota2$country2[grep("Iran",rota2$country)] <- "Iran"

# Iraq
rota2$country2[grep("raq",rota2$country)] <- "Iraq"

# Israel
rota2$country2[grep("srael",rota2$country)] <- "Israel"

# Italy
rota2$country2[grep("taly",rota2$country)] <- "Italy"

# Japan
rota2$country2[grep("apan",rota2$country)] <- "Japan"
rota2$country2[grep("apan",rota2$note)] <- "Japan"
rota2$country2[grep("okyo",rota2$note)] <- "Japan"

# Jordan
rota2$country2[grep("ordan",rota2$country)] <- "Jordan"

# Kenya
rota2$country2[grep("enya",rota2$country)] <- "Kenya"
rota2$country2[grep("enya",rota2$organism)] <- "Kenya"

# Kuwait
rota2$country2[grep("uwait",rota2$country)] <- "Kuwait"

# Libya
rota2$country2[grep("ibya",rota2$country)] <- "Libya"

# Madagascar
rota2$country2[grep("adagascar",rota2$country)] <- "Madagascar"

# Malawi
rota2$country2[grep("alawi",rota2$country)] <- "Malawi"

# Malaysia
rota2$country2[grep("alaysia",rota2$country)] <- "Malaysia"

# Mali
rota2$country2[grep("Mali",rota2$country)] <- "Mali"

# Mauritius
rota2$country2[grep("auritius",rota2$country)] <- "Mauritius"

# Mexico
rota2$country2[grep("exico",rota2$country)] <- "Mexico"

# Morocco
rota2$country2[grep("orocco",rota2$country)] <- "Morocco"

# Myanmar
rota2$country2[grep("yanmar",rota2$country)] <- "Myanmar"

# Nepal
rota2$country2[grep("epal",rota2$country)] <- "Nepal"

# Netherlands
rota2$country2[grep("etherlands",rota2$country)] <- "Netherlands"

# New Zealand
rota2$country2[grep("ealand",rota2$country)] <- "New Zealand"

# Nicaragua
rota2$country2[grep("icaragua",rota2$country)] <- "Nicaragua"

# Nigeria
rota2$country2[grep("igeria",rota2$country)] <- "Nigeria"

# Oman
rota2$country2[grep("Oman",rota2$country)] <- "Oman"

# Pakistan
rota2$country2[grep("akistan",rota2$country)] <- "Pakistan"

# Paraguay
rota2$country2[grep("araguay",rota2$country)] <- "Paraguay"

# Peru
rota2$country2[grep("Peru",rota2$country)] <- "Peru"

# Philippines
rota2$country2[grep("hilippines",rota2$country)] <- "Philippines"

# Poland
rota2$country2[grep("oland",rota2$country)] <- "Poland"

# Portugal
rota2$country2[grep("ortugal",rota2$country)] <- "Portugal"

# Reunion
rota2$country2[grep("eunion",rota2$country)] <- "Reunion"

# Russia
rota2$country2[grep("ussia",rota2$country)] <- "Russia"
rota2$country2[grep("RUS",rota2$organism)] <- "Russia"

# Sao Tome and Principe
rota2$country2[grep("rincipe",rota2$country)] <- "Sao Tome and Principe"

# Saudi Arabia
rota2$country2[grep("audi",rota2$country)] <- "Saudi Arabia"

# Senegal
rota2$country2[grep("enegal",rota2$country)] <- "Senegal"

# Sierra Leone
rota2$country2[grep("ierra",rota2$country)] <- "Sierra Leone"

# Slovenia
rota2$country2[grep("lovenia",rota2$country)] <- "Slovenia"

# South Africa
rota2$country2[grep("outh Africa",rota2$country)] <- "South Africa"

# South Korea
rota2$country2[grep("orea",rota2$country)] <- "South Korea"

# Spain
rota2$country2[grep("Spain",rota2$country)] <- "Spain"

# Sri Lanka
rota2$country2[grep("anka",rota2$country)] <- "Sri Lanka"

# Sudan
rota2$country2[grep("udan",rota2$country)] <- "Sudan"

# Swaziland
rota2$country2[grep("waziland",rota2$country)] <- "Swaziland"

# Sweden
rota2$country2[grep("weden",rota2$country)] <- "Sweden"

# Taiwan
rota2$country2[grep("aiwan",rota2$country)] <- "Taiwan"
rota2$country2[grep("aiwan",rota2$note)] <- "Taiwan"


# Tanzania
rota2$country2[grep("anzania",rota2$country)] <- "Tanzania"

# Thailand
rota2$country2[grep("hailand",rota2$country)] <- "Thailand"

# Togo
rota2$country2[grep("Togo",rota2$country)] <- "Togo"

# Tunisia
rota2$country2[grep("unisia",rota2$country)] <- "Tunisia"

# Turkey
rota2$country2[grep("urkey",rota2$country)] <- "Turkey"

# Uganda
rota2$country2[grep("ganda",rota2$country)] <- "Uganda"

# United Kingdom
rota2$country2[grep("King",rota2$country)] <- "United Kingdom"
rota2$country2[grep("reland",rota2$country)] <- "United Kingdom"

# Uruguay
rota2$country2[grep("ruguay",rota2$country)] <- "Uruguay"

# USA
rota2$country2[grep("USA",rota2$country)] <- "USA"
rota2$country2[grep("USA",rota2$organism)] <- "USA"
rota2$country2[grep("USA",rota2$strain)] <- "USA"
rota2$country2[grep("bama",rota2$organism)] <- "USA"
rota2$country2[grep("SEP-",rota2$organism)] <- "USA"
rota2$country2[grep("U.S.",rota2$note)] <- "USA"

# Venezuela
rota2$country2[grep("enezuela",rota2$country)] <- "Venezuela"

# Vietnam
rota2$country2[grep("iet",rota2$country)] <- "Vietnam"

# Yemen
rota2$country2[grep("emen",rota2$country)] <- "Yemen"

# Zambia
rota2$country2[grep("Zambia",rota2$country)] <- "Zambia"

# Zimbabwe
rota2$country2[grep("imbab",rota2$country)] <- "Zimbabwe"

# DATE ####

# for testing
# table(rota2$collection_date[grep("^\\d{4}$",rota2$collection_date)],exclude=NULL)
# table(rota2$collection_date[grep("\\-\\d{4}$",rota2$collection_date)],exclude=NULL)

# properly formatted
# year only
# rota2$collection_date2[grep("^\\d{4}$",rota2$collection_date)]<- rota2$collection_date[grep("^\\d{4}$",rota2$collection_date)] 
# year + month and date
# rota2$collection_date2[grep("\\-\\d{4}$",rota2$collection_date)]<- rota2$collection_date[grep("\\-\\d{4}$",rota2$collection_date)] 

# grabbing for year, month, date separately
# year
rota2$year <- "0000"
y <- 1958
while (y < 2017)
{
  
  rota2$year[grep(y,rota2$organism)] <- paste(y)
  rota2$year[grep(y,rota2$note)] <- paste(y) # if a range is given, it will take the END year
  rota2$year[grep(y,rota2$host)] <- paste(y)
  rota2$year[grep(y,rota2$collection_date)] <- paste(y)
  
  y=y+1
}
#table(rota2$year)

# month
rota2$month <- "00"
rota2$month[grep("Jan",ignore.case = TRUE,rota2$collection_date)]<- "01"
rota2$month[grep("Feb",ignore.case = TRUE,rota2$collection_date)]<- "02"
rota2$month[grep("Mar",ignore.case = TRUE,rota2$collection_date)]<- "03"
rota2$month[grep("Apr",ignore.case = TRUE,rota2$collection_date)]<- "04"
rota2$month[grep("May",ignore.case = TRUE,rota2$collection_date)]<- "05"
rota2$month[grep("Jun",ignore.case = TRUE,rota2$collection_date)]<- "06"
rota2$month[grep("Jul",ignore.case = TRUE,rota2$collection_date)]<- "07"
rota2$month[grep("Aug",ignore.case = TRUE,rota2$collection_date)]<- "08"
rota2$month[grep("Sep",ignore.case = TRUE,rota2$collection_date)]<- "09"
rota2$month[grep("Oct",ignore.case = TRUE,rota2$collection_date)]<- "10"
rota2$month[grep("Nov",ignore.case = TRUE,rota2$collection_date)]<- "11"
rota2$month[grep("Dec",ignore.case = TRUE,rota2$collection_date)]<- "12"

rota2$month[grep("^\\d{4}-01",rota2$collection_date)]<- "01"
rota2$month[grep("^\\d{4}-02",rota2$collection_date)]<- "02"
rota2$month[grep("^\\d{4}-03",rota2$collection_date)]<- "03"
rota2$month[grep("^\\d{4}-04",rota2$collection_date)]<- "04"
rota2$month[grep("^\\d{4}-05",rota2$collection_date)]<- "05"
rota2$month[grep("^\\d{4}-06",rota2$collection_date)]<- "06"
rota2$month[grep("^\\d{4}-07",rota2$collection_date)]<- "07"
rota2$month[grep("^\\d{4}-08",rota2$collection_date)]<- "08"
rota2$month[grep("^\\d{4}-09",rota2$collection_date)]<- "09"
rota2$month[grep("^\\d{4}-10",rota2$collection_date)]<- "10"
rota2$month[grep("^\\d{4}-11",rota2$collection_date)]<- "11"
rota2$month[grep("^\\d{4}-12",rota2$collection_date)]<- "12"

#no month found in $note (except when given as a range) or $organism

#table(rota2$month)

# date
# check for 2 formats
# table(rota2$collection_date[grep("^\\d{4}-\\d{2}-",rota2$collection_date)])
# table(rota2$collection_date[grep("^\\d{2}-",rota2$collection_date)]) 

# test
# table(rota2$collection_date[grep(paste("^",date2,"-",sep=""),rota2$collection_date)])
# table(rota2$collection_date[grep(paste("^\\d{4}-\\d{2}-",date2,sep=""),rota2$collection_date)])

rota2$date <- "00"
date1 <- 1
while (date1 < 32)
{
date2 <- formatC(date1,width=2, flag="0")
rota2$date[grep(paste("^",date2,"-",sep=""),rota2$collection_date)]<- paste(date2)
rota2$date[grep(paste("^\\d{4}-\\d{2}-",date2,sep=""),rota2$collection_date)]<- paste(date2)
date1 = date1 + 1
}
#table(rota2$date)

# combining year, month, date to yyyy-mm-dd format (http://www.statmethods.net/input/dates.html)
#mydates<-as.Date(rota2$collection_date2,"%Y-%m-%d")
rota2$collection_date2<-paste(rota2$year,"-",rota2$month,"-",rota2$date,sep="") 
table(rota2$collection_date2)

# Summary Table ####
table(rota2$host2)
table(rota2$country2)
table(rota2$collection_date2)
# Sequence data ####

# rota.seq <- read.dna("rota_sequences.fas",format="fasta",as.matrix=FALSE)
#match(names(rota.seq),rota2$accession)
