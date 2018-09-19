THIS := $(realpath $(lastword $(MAKEFILE_LIST)))
HERE := $(shell dirname $(THIS))

.PHONY: test

test:
	php $(HERE)/vendor/bin/phpunit --configuration $(HERE)/phpunit.xml