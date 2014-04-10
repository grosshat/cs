#include <stdio.h>

// Global variable is available along the entire program inside and outside of
// functions and code blocks.

int counter;

int main()
{
    int a, b;

    a = 10;
    b = 20;
    counter = a + b;

    printf("%d, %d, %d\n", a, b, counter);

    return 0;
}
