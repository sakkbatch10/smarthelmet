from django.db import models

# Create your models here.
class Account(models.Model):
    firstname = models.CharField(max_length=100)
    email = models.CharField(max_length=100)
    password = models.CharField(max_length=100)
    address = models.CharField(max_length=300)