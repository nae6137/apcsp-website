#include <stdio.h>


int main()


{

    int arg1budget;
    int arg2expense;
    int arg3remainingmoney;
    printf("\nEnter the value of budget\n");
    scanf ("%f", &arg1budget);
    printf("\nEnter the value of expense\n");
    scanf ("%f", &arg2expense);

    arg3remainingmoney = arg1budget - arg2expense;
    printf("Remaining Money: %f\n",arg3remainingmoney );
    if (arg3remainingmoney < 0);
    {printf("Out of money\n");
    }
    else
    {printf("Still within budget!")
    }

    return 0;


}

