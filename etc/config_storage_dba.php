#############################################
# Configuration file for b8's storage class #
#############################################


# Set this to TRUE if you want to create a new database
# (independent of the used database backend)
createDB = TRUE


# The below blocks are sample configurations
# for all availible database backends.


### Use a BerkeleyDB (recommended!) ###

# This defines which file should be used for storing the database.
# The path is relative to the directory where b8.php is located.
dbFile = wordlist.db

# This defines the database version used. See readme for details.
dbVersion = db4


