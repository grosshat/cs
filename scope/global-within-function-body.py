"""
Example of global variable called within function body. Global variables are
always available inside and outside functions.
"""

counter = 2

def test_global():
    a = 1
    b = 2

    print a + b + counter

test_global()
