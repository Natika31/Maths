
public class MatriceCarre extends Matrice
{
	
	public MatriceCarre(Double[][] tableau) throws Exception
	{
		super(tableau);

		if (tableau[0].length != tableau.length)
		{
			throw new Exception("Ce n'est pas un tableau carré : "+tableau[0].length+" != "+tableau.length);
		}
		
	}
	
	public MatriceCarre(int c, int min, int max)
	{
		super(c,c,min,max);
	}
	
	static public Double random(int min, int max)
	{
		return (Math.random()*( max - min + 1 ))+ min; 
	}

	
}
