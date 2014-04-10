"""
Override global variable created outside and inside function.
"""

counter = 1

def override():
    global counter
    counter = 10
    print "inside the function:", counter

override()
print "outside the function:", counter
