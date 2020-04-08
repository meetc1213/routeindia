from django.shortcuts import render
def home(request):
    return render(request,'home.html',{})
def aboutus(request):
    return render(request,'aboutus.html',{})
def drives(request):
    return render(request,'drives.html',{})
def contactus(request):
    return render(request,'contactus.php',{})
# Create your views here.
