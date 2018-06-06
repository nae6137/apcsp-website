
#include <stdio.h>


int main()

{
    float budget;
    float expense;
    float remainingmoney;
    printf("\nEnter the value of budget\n");
    scanf ("%f", &budget);
    printf("\nEnter the value of expense\n");
    scanf ("%f", &expense);

    remainingmoney = budget - expense;
    printf("Remaining Money: %f\n",remainingmoney );
    return 0;
}



