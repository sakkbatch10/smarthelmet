from .import views

from django.urls import path,include

urlpatterns = [
    path("",views.index),
    path("index/",views.index,name='index'),
    path("signup/",views.register,name='register'),
    path("login/",views.login,name="login"),
    path("about/",views.about,name='about'),
]