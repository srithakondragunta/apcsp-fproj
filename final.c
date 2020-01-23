#include <stdio.h>
#include <stdlib.h>
float areaOfRectangle(float length, float width)
{
	float rectarea = (length * width);
	return rectarea;
}

float areaOfTriangle(float base, float height)
{
	float triarea = ((base * height)/2);
	return triarea;
}
float areaOfCircle(float radius) 
{
	float area = (3.14159265358979323846 * radius * radius);
	return area;
}



int main(int argc, char* argv[])
{  
  float lower;
  int found = sscanf(argv[2], "%f", &lower);
  if (found != 1)
    {
        printf("First arg is not a decimal, enter two floats\n");
        return 1;
    }

  float upper;
  found = sscanf(argv[3], "%f", &upper);
  if (found != 1)
    {
        printf("Second arg is not a decimal, enter two floats\n");
        return 1;
    }

 int choice=(int)atof(argv[1]);
 if (choice == 1)
  {
	float llength = atof(argv[2]);
        float width = atof(argv[4]);
   for (float llength = lower; llength <= upper; llength++)
    {
	float rectarea = areaOfRectangle(llength, width);
	printf("the area of the rectangle is %f\n", rectarea);
    }
	}
  if (choice == 2)
   {
	float lbase = atof(argv[2]);
	 float height = atof(argv[4]);
	for (float lbase = lower; lbase <= upper; lbase++)
    {
	float triarea = areaOfTriangle(lbase,height);
	printf("the area of the triangle is %f\n", triarea);
   }
	}
}
