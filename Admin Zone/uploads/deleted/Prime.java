class Prime{
       public static void main(String args[]){
            int n=8;
            int limit=n/2;
            boolean isPrime=true;
            System.out.println("Number is : "+n);
            for(int i=0;i<=limit;i++){
            int r=n%i;
            if(r==0){
            isPrime=false;
            System.out.println("Number is not Prime");
            break;
           }
       }
            if(isPrime){
            System.out.println("Number is Prime");
   }


 }

}