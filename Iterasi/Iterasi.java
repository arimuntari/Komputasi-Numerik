import java.lang.Math;
import java.text.DecimalFormat;
class Iterasi{
	public static void main(String[] args) {
		double x =0, fx,  asli=0.56714329, ea, er, ee, sm;
		Iterasi b = new Iterasi();
		DecimalFormat s = new DecimalFormat("0.00");
		System.out.println(" X\t\tFX\t\tEr\t\tEe");
		for(int i=1; i<=10; i++){
			fx = b.fungsi(x);
			ea = asli - x;
			er = Math.abs(ea)/asli*100;
			ee = ((fx-x)/fx) *100;
			System.out.println(" "+b.p2d(x)+"\t\t"+b.p2d(fx)+"\t\t"+b.p2d(er)+"\t\t"+s.format(Math.abs(ee))+"%");
			x = fx;
		}
	}
	public double fungsi(double x){
		return Math.exp(-x);
	}
	public String p2d(double x){
		DecimalFormat df = new DecimalFormat("0.####");
		return df.format(x);
	}
}