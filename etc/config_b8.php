################################
# b8's main configuration file #
################################


### This tells b8 in which way it should split a text. ###

# As there's just one such class at the moment (default),
# the choice is quite easy ;-)

#lexerType = scws 
lexerType = default


### This tells b8 which database backend to use ###

# There are three backends availible:
#   dba   : use a DBA database (BerkeleyDB) -- RECOMMENDED!
#   mysql : use a MySQL database and table
#   sqlite: use an SQLite database and table

# databaseType = sqlite
#databaseType = mysql
databaseType = memcache

### These are some mathematical internals ###

# DON'T CHANGE THESE VALUES UNLESS YOU KNOW WHAT YOU
# ARE DOING! IT COULD RESULT IN POOR PERFORMANCE!

# The values are discussed in readme.

# The number of tokens to use when classifying longer texts. The higher this
# value is, the more will the filter fail on texts including passages from
# books, etc.
# The default "15" is a good choice here.
useRelevant = 15

# This sets the minimun deviation that a token's rating has to have from
# 0.5. A token with a rating closer to 0.5 won't be used for the calculation.
minDev = 0.2

# This is Gary Robinson's "x" constant. A completely unknown token will be
# rated with robX. 0.5 for robX seems quite reasonable, as we can't say if
# a token that also can't be rated by degeneration is good or bad.
robX = 0.5

# This is Gary Robinson's "s" constant. This is essentially the probability
# that the robX value is the correct one for an unknown token. It will also
# shift the probability of rarely seen tokens towards robX.
robS = 0.3

# This sets whether quite sharp rating should be chosen, even for tokens than
# have not been seen very often. As Robinson's continious ratings produce
# significantly better results (at least with a bunch of messages learned),
# you should not set this to TRUE.
sharpRating = FALSE
