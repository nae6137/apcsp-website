#include <stdio.h>

int main()

{int arg1;
int arg2;
int arg3;
printf("\nEnter the value of the budget\n");
scanf ("%d", &arg1);
printf("\nEnter the value of the expense\n");
scanf("%d", &arg2);

arg3 = arg1 - arg2;
printf("\nRemaining Amount of Money: %d\n", arg3);
return 0;
}

