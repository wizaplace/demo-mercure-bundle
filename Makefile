.PHONY: mercure

server:
	php bin/console server:start 0.0.0.0:8000

mercure:
	JWT_KEY='aVerySecretKey' ADDR='localhost:3000' ALLOW_ANONYMOUS=1 CORS_ALLOWED_ORIGINS=* mercure/mercure
