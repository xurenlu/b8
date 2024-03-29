#############################################
# Configuration file for b8's storage class #
#############################################


# Set this to TRUE if you want to create a new database
# (independent of the used database backend)
createDB = FALSE


# The below blocks are sample configurations
# for all availible database backends.


### Use a BerkeleyDB (recommended!) ###

# This defines which file should be used for storing the database.
# The path is relative to the directory where b8.php is located.
#dbFile = wordlist.db

# This defines the database version used. See readme for details.
#dbVersion = db4


### Use a MySQL table ###

# Attention: if the script using b8 connects to MySQL anyway,
# the connection resource can be passed to b8 as a parameter.
# If you want the storage class to set up its own connection,
# fill in the acces data below.

# This is the name of the MySQL table used for storing the data
tableName = b8_wordlist

# Uncomment and change this properly if you want the
# storage class to set up it's own link to MySQL

#host = localhost
#user = myuser
#pass = mypass
#db   = mydb
host = 
user = 
pass = 
db   = 


### Use an SQLite database ###

# This defines which file should be used for storing the database.
# The path is relative to the directory where b8.php is located.
#sqliteFile = wordlist.db

# This is the name of the SQLite table used for storing the data
#tableName = b8_wordlist
