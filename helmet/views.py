from django.shortcuts import render,redirect
from .models import Account

# Create your views here.
def index(request):
    return render(request,"index.html")

def about(request):
    return render(request,"about.html")

# def login(request):
#     if request.method=="POST":
#         a = request.POST.get("firstname")
#         d = request.POST.get("password")
#         log=Account.objects.filter(firstname=a,password=d)
#         # username=request.POST['username']
#         # password=request.POST['password']
#         # if username=='sam' and password=='sam123':
#         print("Login Successfull...!")
#         return redirect('http://localhost/sensordata')
#     else:
#         print("Login Failed...!")
#         return render(request,"login.html")  
#     # return render(request,"login.html")


def login(request):
    if request.method == "POST":
        a = request.POST.get("firstname")
        d = request.POST.get("password")
        log = Account.objects.filter(firstname=a, password=d)
        if log.exists():
            print("Login Successfull...!")
            return redirect('http://localhost/sensordata')
        else:
            print("Login Failed...!")
            return render(request, "login.html")
    else:
        return render(request, "login.html")



def register(request):
    if request.method=='POST':

        a = request.POST.get("firstname")
        c = request.POST.get("email")
        d = request.POST.get("password")
        e = request.POST.get("address")

        Account(firstname=a,email=c,password=d,address=e).save()
        return redirect('index')

    else:
        return render(request,'signup.html')