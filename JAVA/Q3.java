import java.io.*;
import java.util.*;
public class Q3
{
public static void main(String args[])throws IOException {
TreeSet<Integer> s1=new
TreeSet<Integer>(); int i,n,no,s;
System.out.println("\n Initial size of array:"+s1.size()); 
System.out.println("\nEnterno 2of elements:"); 
BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
n=Integer.parseInt(br.readLine());
for(i=0;i<n;i++)
{
System.out.println("\nEnter the elements::");
no=Integer.parseInt(br.readLine());
s1.add(no);
}
System.out.println("\nFinal size of array:"+s1.size());
System.out.println("\nElementsin the collection are:"+s1);
System.out.println("\nEnter the element to search::");
s=Integer.parseInt(br.readLine());
if(s1.contains(s))
{
}
else
{
System.out.println("Element is PRESENT in Collection!");
System.out.println("Element is NOT PRESENT in Collection!");
}
}
}
