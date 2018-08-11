macOs = Darwin
os = $(shell uname)
phpunit = vendor/bin/phpunit

########################################################################
# Standard targets
# See https://www.gnu.org/software/make/manual/html_node/Standard-Targets.html
########################################################################

.PHONY : all
all : ;

.PHONY : clean
clean :
	@$(RM) -r vendor
	@$(RM) composer.phar
	@$(RM) -r tests/coverage

########################################################################
# Phony targets
########################################################################

.PHONY : test
test : $(phpunit) ; $<

.PHONY : test-coverage-html
test-coverage-html : $(phpunit)
	$< --coverage-html tests/coverage
ifeq ($(os), $(macOs))
	open tests/coverage/index.html
endif

########################################################################
# Real targets
########################################################################

composer.phar :
	@php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
	@php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
	@php composer-setup.php
	@php -r "unlink('composer-setup.php');"

vendor/% : composer.phar ; @php composer.phar install
